<?php
header('Content-Type: application/json');

// Configuration
$config = [
    'email' => 'contato@portoes.com', // Replace with your email
    'subject' => 'Nova mensagem do site - Portões Automáticos',
    'min_length' => [
        'name' => 3,
        'message' => 10
    ]
];

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone
function is_valid_phone($phone) {
    // Remove all non-numeric characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    // Check if the phone number has between 10 and 11 digits
    return strlen($phone) >= 10 && strlen($phone) <= 11;
}

try {
    // Check if it's a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método inválido');
    }

    // Get and sanitize form data
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        throw new Exception('Todos os campos são obrigatórios');
    }

    // Validate field lengths
    if (strlen($name) < $config['min_length']['name']) {
        throw new Exception('O nome deve ter pelo menos ' . $config['min_length']['name'] . ' caracteres');
    }

    if (strlen($message) < $config['min_length']['message']) {
        throw new Exception('A mensagem deve ter pelo menos ' . $config['min_length']['message'] . ' caracteres');
    }

    // Validate email
    if (!is_valid_email($email)) {
        throw new Exception('E-mail inválido');
    }

    // Validate phone
    if (!is_valid_phone($phone)) {
        throw new Exception('Telefone inválido');
    }

    // Prepare email content
    $email_content = "Nome: $name\n";
    $email_content .= "E-mail: $email\n";
    $email_content .= "Telefone: $phone\n\n";
    $email_content .= "Mensagem:\n$message";

    // Email headers
    $headers = [
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' => 'text/plain; charset=UTF-8'
    ];

    // Send email
    $mail_sent = mail(
        $config['email'],
        $config['subject'],
        $email_content,
        $headers
    );

    if (!$mail_sent) {
        throw new Exception('Erro ao enviar e-mail');
    }

    // Log successful submission
    $log_entry = date('Y-m-d H:i:s') . " - Nome: $name, Email: $email\n";
    file_put_contents('form-submissions.log', $log_entry, FILE_APPEND);

    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
    ]);

} catch (Exception $e) {
    // Return error response
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 