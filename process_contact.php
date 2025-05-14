<?php
// Configuration
$to = 'contato@exemplo.com'; // Replace with your email
$subject = 'Nova mensagem do site';

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$subject_type = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Validate required fields
if (empty($name) || empty($email) || empty($phone) || empty($subject_type) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Por favor, preencha todos os campos obrigatórios.']);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Por favor, insira um e-mail válido.']);
    exit;
}

// Format subject type
$subject_types = [
    'orcamento' => 'Orçamento',
    'suporte' => 'Suporte Técnico',
    'informacao' => 'Informações',
    'outro' => 'Outro'
];
$subject_type = $subject_types[$subject_type] ?? 'Outro';

// Prepare email content
$email_content = "Nome: $name\n";
$email_content .= "E-mail: $email\n";
$email_content .= "Telefone: $phone\n";
$email_content .= "Assunto: $subject_type\n\n";
$email_content .= "Mensagem:\n$message";

// Email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
$mail_sent = mail($to, $subject, $email_content, $headers);

if ($mail_sent) {
    // Log successful submission
    $log_message = date('Y-m-d H:i:s') . " - Message sent from $email\n";
    file_put_contents('contact_log.txt', $log_message, FILE_APPEND);

    // Return success response
    echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
} else {
    // Log error
    $log_message = date('Y-m-d H:i:s') . " - Failed to send message from $email\n";
    file_put_contents('contact_log.txt', $log_message, FILE_APPEND);

    // Return error response
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Erro ao enviar mensagem. Por favor, tente novamente mais tarde.']);
} 