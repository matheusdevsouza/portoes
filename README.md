# Site de Manutenção de Portões Automáticos

Este é um site profissional para uma empresa especializada em manutenção de portões automáticos. O site foi desenvolvido usando PHP, HTML5, CSS3 e JavaScript, com foco em design moderno, responsividade e experiência do usuário.

## Características

- Design moderno e responsivo
- Animações suaves usando GSAP
- Formulário de contato com validação
- Integração com WhatsApp
- Otimizado para SEO
- Suporte a modo escuro
- Carregamento lazy de imagens
- Sistema de notificações
- Menu mobile amigável

## Requisitos

- PHP 7.4 ou superior
- Servidor web (Apache/Nginx)
- SSL para segurança (recomendado)

## Instalação

1. Clone este repositório para seu servidor web:
```bash
git clone [URL_DO_REPOSITÓRIO]
```

2. Configure seu servidor web para apontar para o diretório do projeto

3. Configure as permissões dos arquivos:
```bash
chmod 755 -R /caminho/do/projeto
chmod 777 -R /caminho/do/projeto/form-submissions.log
```

4. Edite o arquivo `process-form.php` e atualize o email de destino:
```php
$config = [
    'email' => 'seu-email@dominio.com',
    // ...
];
```

5. Personalize o conteúdo:
   - Substitua as imagens em `assets/images/`
   - Atualize os textos no `index.php`
   - Ajuste as cores no `assets/css/style.css`

## Estrutura de Arquivos

```
/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── includes/
│   ├── header.php
│   └── footer.php
├── index.php
├── process-form.php
└── README.md
```

## Manutenção

### Atualizando Conteúdo

1. **Textos e Imagens**
   - Edite os arquivos PHP para atualizar textos
   - Substitua imagens em `assets/images/` mantendo os mesmos nomes de arquivo

2. **Estilos**
   - As variáveis CSS estão no início do arquivo `style.css`
   - Modifique as cores e outros valores conforme necessário

3. **Formulário de Contato**
   - O email de destino está em `process-form.php`
   - As validações podem ser ajustadas no mesmo arquivo

### Backup

Recomenda-se fazer backup regular dos seguintes itens:
- Todo o diretório do site
- Arquivo de log de submissões (`form-submissions.log`)
- Configurações do servidor

## Segurança

1. Mantenha o PHP e todas as dependências atualizadas
2. Use HTTPS para todas as conexões
3. Monitore regularmente o arquivo de log
4. Implemente rate limiting no formulário de contato
5. Mantenha as permissões de arquivo adequadas

## Performance

O site foi otimizado para performance com:
- Lazy loading de imagens
- Minificação de CSS/JS
- Otimização de imagens
- Caching de recursos estáticos

## Suporte

Para suporte ou dúvidas, entre em contato através de:
- Email: [seu-email@dominio.com]
- WhatsApp: [(XX) XXXX-XXXX]

## Licença

Este projeto é proprietário e não pode ser redistribuído sem autorização.

---

Desenvolvido com ❤️ para sua empresa de portões automáticos. 