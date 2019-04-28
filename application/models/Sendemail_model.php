<?php

class Sendemail_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('email');
        $this->load->model('user_model', 'user', true);

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl0.ovh.net';
        $config['smtp_port']    = '465';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_timeout'] = '30';
        $config['smtp_user']    = 'e-gestion@leader-souscription.eu';
        $config['smtp_pass']    = 'Leader2016*';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['crlf']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $this->email->initialize($config);

    }

    public function send($from, $to, $title, $arrF, $arrD, $fAttach) {

        $this->email->from($from);
        $this->email->to($to); 
        $this->email->subject('Invoice System');
        $this->email->message(
            str_replace("contents", 
                $this->email_text($title, $arrF, $arrD), 
                $this->email_template())
        );

        if ($fAttach) {
            foreach ($arrF as $key => $filename) {
                $this->email->attach(base_url() . 'server/php/files/' . $filename);   
            }
        }
        
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }

    }

    public function email_text($title, $arrFname, $arrDesc) {

        $_content = '';
        $_content .= '<h2>'.$title.'</h2>';

        for ($i=0; $i < count($arrFname); $i++) {
            $_content .= '<h3>'.$arrFname[$i].'</h3>';
            $_content .= '<p>'.$arrDesc[$i].'</p>';
        }

        return $_content;

    }

    public function email_template() {

        $_template = '';
        $_template .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $_template .= '<html xmlns="http://www.w3.org/1999/xhtml">';
        $_template .= '<head>';
          $_template .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
          $_template .= '<title>This is title</title>';
          $_template .= '<style type="text/css">';
          $_template .= 'body {margin: 0; padding: 0; min-width: 100%!important;}';
          $_template .= '.content {width: 100%; max-width: 600px;}';
          $_template .= '</style>';
        $_template .= '</head>';
        $_template .= '<body yahoo bgcolor="#ffffff">';
          $_template .= '<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
            $_template .= '<tr>';
              $_template .= '<td>';
                $_template .= '<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
                  $_template .= '<tr>';
                    $_template .= '<td>';
                      $_template .= '<table width="600" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">';
                        $_template .= '<tr>';
                          $_template .= '<td>';
                            $_template .= '<table class="content" align="center" cellpadding="10" cellspaciing="10" border="0">';
                              $_template .= '<tr>';
                                $_template .= '<td bgcolor="#4285f4">';
                                  $_template .= '<font color="#ffffff" face="Arial" size="4">Notification from Invoice System</font>';
                                $_template .= '</td>';
                              $_template .= '</tr>';
                              $_template .= '<tr>';
                                $_template .= '<td>';
                                  $_template .= '<font color="#000000" face="Arial" size="2.5">contents</font>';
                                $_template .= '</td>';
                              $_template .= '</tr>';
                              $_template .= '<tr>';
                                $_template .= '<td bgcolor="#4285f4">';
                                  $_template .= '<font color="#ffffff" face="Arial" size="2">&copy;Raphael QUIN '.date("Y").'</font>';
                                $_template .= '</td>';
                              $_template .= '</tr>';
                            $_template .= '</table>';
                          $_template .= '</td>';
                        $_template .= '</tr>';
                      $_template .= '</table>';
                    $_template .= '</td>';
                  $_template .= '</tr>';
                $_template .= '</table>';
              $_template .= '</td>';
            $_template .= '</tr>';
          $_template .= '</table>';
        $_template .= '</body>';
      $_template .= '</html>';
      
      return $_template;

    }
    
}
?>