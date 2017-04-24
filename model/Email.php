<?
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

class Email {

    private $address;
    private $subject;
    public $message;

    public function __construct($address, $subject){
        $this->address = $address;
        $this->subject = $subject;
    }

    public function getEmailAddress(){
        return $this->address;
    }

    public function getEmailSubject(){
        return $this->subject;
    }

    public function getEmailMessage(){
        return $this->message;
    }

    public function sendEmail(){
        mail($this->address,$this->subject,$this->message);
    }

}
$bo = false;
try{
    $e = new Email("vijayk_1@hotmail.com", "Teste");
    $message = "Testando";
    $e->message = $message;
    $bo = true;
}catch(Exception $e){
    return "";
}
if($bo){
    $e->sendEmail();
    print "Email enviado";
    // print $e->getEmailAddress();
    // print $e->getEmailSubject();
    // print $e->getEmailMessage();
}
?>