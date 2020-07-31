function createCertTemplate(stud_id,student_name,reg_no,batch,issuer_name,title,des) {
    console.log('createCertTemplate');
    // console.log(stud_id,student_name,reg_no,issuer_name,title,des);
    // var student_name = 'teststudent';
    // var reg_no = 'testregno';
    $('.loading').css('display', 'block');
    $('.create-template-btn').css('display', 'none');
    $.ajax(
        {
            type    : 'GET',
            url     : `http://localhost:8081/create-cert-template?student_name=${student_name}&reg_no=${reg_no}&issuer_name=${issuer_name}&certificate_title=${title}&certificate_description=${des}`,
            success : function(result){
                if(result.title === 'success') {
                    $('.response-style').css('display', 'block');
                    issueCert(reg_no, stud_id);
                }
            }
        }
    );
}

function issueCert(reg_no,stud_id){
    $.ajax(
        {
            type    : 'GET',
            url     : `http://localhost:8081/issue-certificate?reg_no=${reg_no}`,
            success : function(result){
                if(result.title === ' success') {
                    console.log('hhi1');
                    $('.loading').css('display', 'none');
                    $('.issue-style').css('display', 'block');
                    setTimeout(function(){ 
                        tempApprovedStatus(stud_id);
                    }, 3000);
                    
                }
            }
        }
    );
}

function tempApprovedStatus(stud_id){

    $.ajax(
        {
            type    : 'GET',
            url     : `http://localhost/startmin/pages/temp_create_approved_status.php?id=${stud_id}`,
            success : function(result){
                console.log(result);
                console.log('tempApprovedStatus');

                window.location = "http://localhost/startmin/pages/list_req.php";
                
            }
        }
    );
}

