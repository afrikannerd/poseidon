
/**
 * Description of app
 * Created on : Jun 29, 2018, 22:10:30 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */
$(document).ready(function(){
    
    $('#addnew').on('click',function(){
        
        var cls = $('#class').val();
        var adm = $('#admno').val();
        var name = $('#name').val();

        $.post('create',{cls:cls,adm:adm,name:name},function(data){
            $("#info").html(data);

        });
    });

    $('.view_student').on('click',function (){
        $("#info").html('');
        $.post('getStudents',{},function (data) {
            $("#info").html(data);
        })
    });
});