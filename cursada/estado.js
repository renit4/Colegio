$(document).ready( function(){
    console.log("funciona 1");

    $("#est").click( function(){
        console.log("funciona 2");

        var $n1= parseFloat($("#n1").val());
        var $n2= parseFloat($("#n2").val());
        var $as= parseFloat($("#asistencia").val());

        var $est="";
        if($n1>=8 && $n2>=8 && $as>=80){
            $est="Promocionado";
        }
        else{
            if($n1>=4 && $n2>=4 && $as>=70){
                $est="Regular";
            }
            else{
                $est="Libre";
            }
        }
        console.log($est);

        $("#estado").val($est);


    });  



});