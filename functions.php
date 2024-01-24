<?php
require_once 'inc/load.php';

/* Links */
$argVar = array(
    
    
    
    "instagram" => 'https://www.instagram.com/maxclean.servicos',
	"facebook" => 'https://www.facebook.com/maxcleanrj.servicos',
	"youtube" => "",
    
	"email" => "mailto:contato@maxclean.com.br",
	"emailLabel" => "contato@maxclean.com.br",
    
	"phone" => "tel:-5521996064692",
	"phoneLabel" => "(21) 99606-4692",
    
    'whatsapp' => 'https://wa.me/5521996064692?text=Ol%C3%A1,%20gostaria%20de%20or%C3%A7amento!',
	"whatsappLabel" => "(21) 99606-4692",
    
    'address' => '',
    'maps' => '',
);
InfoVar::save($argVar);
