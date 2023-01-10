//* Start JavaScript for SideNav Animation

document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggleSideNavBar = document.getElementById(toggleId),
    sideNavBar = document.getElementById(navId),
    bodyContent = document.getElementById(bodyId),
    headerContent = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggleSideNavBar && sideNavBar && bodyContent && headerContent){
            toggleSideNavBar.addEventListener('click', ()=>{
            // show navbar
            sidenavbar.classList.toggle('show-sidenavbar')
            // change icon
            toggleSideNavBar.classList.toggle('fa-xmark')
            // add padding to body
            bodyContent.classList.toggle('body-transform')
            // add padding to header
            headerContent.classList.toggle('body-transform')
            })
        }
    }
    
    showNavbar('sidenav-toggle-icon','sidenavbar','body','sidenav-header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.sidenavbar-menu')
    
    function colorLink(){
        if(linkColor){
            linkColor.forEach(menuIcon=> menuIcon.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(menuIcon=> menuIcon.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
});

//* End of JavaScript for SideNav Animation

//* Start of JavaScript for Sign Out SweetAlert

function out(){
    var lag = "signout";
    swal({
        title: "Sign Out?",
        text: "Are you sure you want sign out?",
        icon: "warning",
        buttons: ["Cancel","Yes"],
    })
    .then((value) => {
        if(value){
        if(lag){
            $.ajax({
                type: 'post',
                data: {
                signout:lag
                },
                url: 'header.php',
                success: function (data){
                window.location.href='index.php';
                }
            });
        }
        }
    })
};

//* End of JavaScript for Sign Out SweetAlert

//* Start of JavaScript for Datatables and Bootsrap Properties

$(document).ready(function() {
    $('table.display').DataTable({
        "ordering": false,
        "language": {
            "search": '<span class="text-success fw-bold">Search</span>',
            "info": '<span class="text-success fw-bold">Showing</span>' + " _START_ to _END_ of _TOTAL_ " + '<span class="text-success fw-bold">entries</span>',
            "lengthMenu": '<span class="text-success fw-bold">Show</span>' + " _MENU_ " + '<span class="text-success fw-bold">entries</span>',
            "paginate": {
            "next": '<span class="text-success fw-bold">Next</span>' + " " + '<i class="fa-solid fa-circle-chevron-right text-success"></i>',
            "previous": '<i class="fa-solid fa-circle-chevron-left text-success"></i>' + " " +  '<span class="text-success fw-bold">Previous</span>'
            }
        },
    });

    $('.sidenavbar-menu').tooltip({placement: "right"}); 
    $('#sidenav-toggle-icon').tooltip({placement: "bottom"}); 
    $('.view-class').tooltip({placement: "bottom"});
    $('.download-file').tooltip({placement: "bottom"});
    $('.delete-subject').tooltip({placement: "bottom"});
    $('.delete-student').tooltip({placement: "bottom"});
    $('.delete-class').tooltip({placement: "bottom"});
    $('.delete-file').tooltip({placement: "bottom"});
    $('.download-file').tooltip({placement: "bottom"});
    $('.deleteSubjectTS').tooltip({placement: "bottom"});
    $('.deleteStudent').tooltip({placement: "bottom"});
    $('.deleteClass').tooltip({placement: "bottom"});
    $('.deleteMaterial').tooltip({placement: "bottom"});
    $('.adminEditTeacher').tooltip({placement: "bottom"});
    $('.adminDeleteTeacher').tooltip({placement: "bottom"});
    $('.adminEditStudent').tooltip({placement: "bottom"});
    $('.adminDeleteStudent').tooltip({placement: "bottom"});
    $('.adminEditAdmin').tooltip({placement: "bottom"});
    $('.adminDeleteAdmin').tooltip({placement: "bottom"});
    $('.adminEditDepartment').tooltip({placement: "bottom"});
    $('.adminDeleteDepartment').tooltip({placement: "bottom"});
    $('.adminEditCourse').tooltip({placement: "bottom"});
    $('.adminDeleteCourse').tooltip({placement: "bottom"});
    $('.adminEditSubject').tooltip({placement: "bottom"});
    $('.adminDeleteSubject').tooltip({placement: "bottom"});
} );

$(document).ready(function() {
    $('table.display2').DataTable({
        "pageLength" : 5,
        "lengthMenu": [[5, 10, 25, 100], [5, 10, 25, 100]],
        "ordering": false,
        "language": {
            "search": '<span class="text-primary fw-bold">Search</span>',
            "info": '<span class="text-primary fw-bold">Showing</span>' + " _START_ to _END_ of _TOTAL_ " + '<span class="text-primary fw-bold">entries</span>',
            "lengthMenu": '<span class="text-primary fw-bold">Show</span>' + " _MENU_ " + '<span class="text-primary fw-bold">entries</span>',
            "paginate": {
            "next": '<span class="text-primary fw-bold">Next</span>' + " " + '<i class="fa-solid fa-circle-chevron-right text-primary"></i>',
            "previous": '<i class="fa-solid fa-circle-chevron-left text-primary"></i>' + " " +  '<span class="text-primary fw-bold">Previous</span>'
            }
        },
    });
} );
//* End of JavaScript for Datatables and Bootsrap Properties

//* Start of JavaScript for Process (Delete and Update)

$('.deleteClass').on('click',function() {
$('#example').on('click', '.deleteClass', function() {
    $('#deleteClassModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deleterclass_teacherid').val(data[0]);
        $('#deleterclass_teachername').val(data[1]);
        $('#deleteclass_id').val(data[2]);
        $('#classname').text(data[3] + " - " + data[4]);  
        $('#classname2').val(data[3] + " - " + data[4]);  
        
    });
});


$('.deleteStudent').on('click',function() {
$('#example').on('click', '.deleteStudent', function() {
    $('#deleteStudentModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);
        $('#student_deletesteacherid').val(data[0]);       
        $('#teacher_deletesteachername').val(data[1]); 
        $('#studentid_deletes').val(data[2]);       
        $('#teacherid_deletes').val(data[3]);  
        $('#studentname').text(data[5]);
        $('#studentname2').val(data[5]);
    });
});


$('.deleteFile').on('click',function() {
$('#example2').on('click', '.deleteFile', function() {
    $('#deleteFileModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deletefileteacherid').val(data[0]);
        $('#deletefileteachername').val(data[1]);
        $('#fileid_deletef').val(data[2]);
        $('#teacherid_deletef').val(data[3]);       
        $("#filename").text(data[4]);
        $("#filename2").val(data[4]);
    });
});


$('.deleteSubjectTS').on('click',function() {
$('#example').on('click', '.deleteSubjectTS', function() {
    $('#deleteSubjectTSModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#subject_deleterststeacherid').val(data[0]);  
        $('#subject_deleterststeachername').val(data[1]);  
        $('#subjectid_deletests').val(data[2]);      
        $('#cccdname').text(data[3] + " - " + data[4]); 
        $('#cccdname2').val(data[3] + " - " + data[4]);  
        
    });
});


$('.addStudentTS').on('click',function() {
$('#example2').on('click', '.addStudentTS', function() {
    $('#addStudentTSModal2').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#addststeacherid').val(data[0]); 
        $('#addststeachername').val(data[1]);   
        $('#teacherid_addsts').val(data[2]); 
        $('#subjectid_addsts').val(data[3]);   
        $('#studentnameaddsts').text(data[5]);    
        $('#studentnameaddsts2').val(data[5]);   
        
    });
});

$('.viewStudents').on('click',function() {
    $('#example').on('click', '.viewStudents', function() {
    $('#viewStudentsInfoModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#name').val(data[3] + " " + data[4]);
        $('#image').attr('src',(data[6]));
        
    });
});


$('.deleteStudents').on('click',function() {
$('#example').on('click', '.deleteStudents', function() {
    $('#deleteStudentInfoModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deletessteacherid').val(data[0]);       
        $('#deletessteachername').val(data[1]); 
        $('#teacherid_deletess').val(data[2]);       
        $('#studentid_deletess').val(data[3]);  
        $('#studentnamets').text(data[5] + " " + data[6] + " " + data[7]);
        $('#studentnamets2').val(data[5] + " " + data[6] + " " + data[7]);
        
    });
});


$('.deleteMaterial').on('click',function() {
$('#example').on('click', '.deleteMaterial', function() {
    $('#deleteMaterialModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deletermaterialadminid').val(data[0]);      
        $('#deletermaterialadminname').val(data[1]); 
        $('#materialid').val(data[2]);      
        $('#materialname').text(data[3]);
        $('#materialname2').val(data[3]);  
        
    });
});


$('.adminDeleteTeacher').on('click',function() {
$('#example').on('click', '.adminDeleteTeacher', function() {
    $('#adminDeleteTeacherModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deleterteacheradminid').val(data[0]); 
        $('#deleterteacheradminname').val(data[1]); 
        $('#deleteteacherid').val(data[2]);      
        $('#deleteteachername').text(data[7] + " " + data[8]  + " " + data [9]);  
        $('#deleteteachername2').val(data[7] + " " + data[8]  + " " + data [9]);  
        
    });
});


$('.adminEditTeacher').on('click',function() {
$('#example').on('click', '.adminEditTeacher', function() {
    $('#adminEditTeacherModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#editorteacheradminid').val(data[0]);   
        $('#editorteacheradminname').val(data[1]);
        $('#editteacherid').val(data[2]);   
        $('#photo-previewer2').attr('src',(data[3]));
        $('#user-photo').val(data[3]);
        $('#username').val(data[5]);  
        $('#password2').val(data[6]);  
        $('#firstName').val(data[7]);  
        $('#middleName').val(data[8]);  
        $('#lastName').val(data[9]);  
        $('#department').val(data[10]);  

    });
});


$('.adminDeleteStudent').on('click',function() {
$('#example').on('click', '.adminDeleteStudent', function() {
    $('#adminDeleteStudentModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deleterstudentadminid').val(data[0]); 
        $('#deleterstudentadminname').val(data[1]); 
        $('#deletestudentid').val(data[2]);      
        $('#deletestudentname').text(data[7] + " " + data[8]  + " " + data [9]);  
        $('#deletestudentname2').val(data[7] + " " + data[8]  + " " + data [9]);  
        
    });
});


$('.adminEditStudent').on('click',function() {
$('#example').on('click', '.adminEditStudent', function() {
    $('#adminEditStudentModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#editorstudentadminid').val(data[0]); 
        $('#editorstudentadminname').val(data[1]); 
        $('#editstudentid').val(data[2]);   
        $('#photo-previewer4').attr('src',(data[3]));
        $('#user-photos').val(data[3]);
        $('#usernames').val(data[5]);  
        $('#passwords2').val(data[6]);
        $('#firstNames').val(data[7]);  
        $('#middleNames').val(data[8]);  
        $('#lastNames').val(data[9]);  

    });
});


$('.adminDeleteDepartment').on('click',function() {
$('#example').on('click', '.adminDeleteDepartment', function() {
    $('#adminDeleteDepartmentModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deleterdepartmentadminid').val(data[0]); 
        $('#deleterdepartmentname').val(data[1]); 
        $('#deletedepartmentid').val(data[2]);      
        $('#deletdepartmentname').text(data[3]);
        $('#deletdepartmentname2').val(data[3]);    
        
    });
});


$('.adminEditDepartment').on('click',function() {
$('#example').on('click', '.adminEditDepartment', function() {
    $('#adminEditDepartmentModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);
        $('#editordepartmentadminid').val(data[0]);   
        $('#editordepartmentadminname').val(data[1]);
        $('#editdepartmentid').val(data[2]);   
        $('#editdepartmentname').val(data[3]);
        $('#editpic').val(data[4]);
        $('#edittitle').val(data[5]);
    });
});
    

$('.adminDeleteCourse').on('click',function() {
$('#example').on('click', '.adminDeleteCourse', function() {
    $('#adminDeleteCourseModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);
        $('#deletercourseadminid').val(data[0]); 
        $('#deletercourseadminname').val(data[1]); 
        $('#deletecourseid').val(data[2]);      
        $('#deletecoursename').text(data[3]);  
        $('#deletecoursename2').val(data[3]); 
        
    });
});


$('.adminEditCourse').on('click',function() {
$('#example').on('click', '.adminEditCourse', function() {
    $('#adminEditCourseModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#editorcourseadminid').val(data[0]);   
        $('#editorcourseadminname').val(data[1]);

        $('#editcourseid').val(data[2]);   
        $('#editcoursename').val(data[3]);
        $('#editcoursedepartment').val(data[4]);
        $('#editmajor').val(data[5]);
    });
});


$('.adminDeleteSubject').on('click',function() {
$('#example').on('click', '.adminDeleteSubject', function() {
    $('#adminDeleteSubjectModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deletersubjectadminid').val(data[0]);   
        $('#deletersubjectadminname').val(data[1])
        $('#deletesubjectid').val(data[2]);      
        $('#deletesubjectname').text(data[3] + " - " + data[4] + " - " + data[5]);  
        $('#deletesubjectname2').val(data[3] + " - " + data[4] + " - " + data[5]); 
        
    });
});


$('.adminEditSubject').on('click',function() {
$('#example').on('click', '.adminEditSubject', function() {
    $('#adminEditSubjectModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#editorsubjectadminid').val(data[0]);   
        $('#editorsubjectadminname').val(data[1])
        $('#editsubjectid').val(data[2]);   
        $('#editsubjectcode').val(data[3]);
        $('#editsubjecttitle').val(data[4]);
        $('#editcategory').val(data[5]);
    });
});



$('.adminAddAdmin').on('click',function() {
$('#example').on('click', '.adminAddAdmin', function() {
    $('#adminAddAdminModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

       
        
    });
});


$('.adminDeleteAdmin').on('click',function() {
$('#example').on('click', '.adminDeleteAdmin', function() {
    $('#adminDeleteAdminModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#deleteradminid').val(data[0]);
        $('#deleteradminname').val(data[1]);
        $('#deleteadminid').val(data[2]);      
        $('#deleteadminname').text(data[7] + " " + data[8]  + " " + data [9]);  
        $('#deleteadminname2').val(data[7] + " " + data[8]  + " " + data [9]);
        
    });
});
    
    
$('.adminEditAdmin').on('click',function() {
$('#example').on('click', '.adminEditAdmin', function() {
    $('#adminEditAdminModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();

        console.log(data);

        $('#editoradminid').val(data[0]);
        $('#editoradminname').val(data[1]);
        $('#editadminid').val(data[2]);   
        $('#photo-previewer6').attr('src',(data[3]));
        $('#user-photoa').val(data[3]);
        $('#usernamea').val(data[5]);  
        $('#passworda2').val(data[6]);  
        $('#firstNamea').val(data[7]);  
        $('#middleNamea').val(data[8]);  
        $('#lastNamea').val(data[9]);  

    });
});
//* End of JavaScript for Process (Delete and Update)

//* JavaScript for Photo Uploading/Preview 
function previewImage(event){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("photo-previewer");
        preview.src = src;
        preview.style.display = "block";
    }
}

function previewImage2(event){
    if(event.target.files.length > 0){
        var src2 = URL.createObjectURL(event.target.files[0]);
        var preview2 = document.getElementById("photo-previewer2");
        preview2.src = src2;
        preview2.style.display = "block";
    }
}

function previewImage3(event){
    if(event.target.files.length > 0){
        var src3 = URL.createObjectURL(event.target.files[0]);
        var preview3 = document.getElementById("photo-previewer3");
        preview3.src = src3;
        preview3.style.display = "block";
    }
}

function previewImage4(event){
    if(event.target.files.length > 0){
        var src4 = URL.createObjectURL(event.target.files[0]);
        var preview4 = document.getElementById("photo-previewer4");
        preview4.src = src4;
        preview4.style.display = "block";
    }
}

function previewImage5(event){
    if(event.target.files.length > 0){
        var src5 = URL.createObjectURL(event.target.files[0]);
        var preview5 = document.getElementById("photo-previewer5");
        preview5.src = src5;
        preview5.style.display = "block";
    }
}

function previewImage6(event){
    if(event.target.files.length > 0){
        var src6 = URL.createObjectURL(event.target.files[0]);
        var preview6 = document.getElementById("photo-previewer6");
        preview6.src = src6;
        preview6.style.display = "block";
    }
}

function previewImage7(event){
    if(event.target.files.length > 0){
        var src7 = URL.createObjectURL(event.target.files[0]);
        var preview7 = document.getElementById("photo-previewer7");
        preview7.src = src7;
        preview7.style.display = "block";
    }
}

function previewImage8(event){
    if(event.target.files.length > 0){
        var src8 = URL.createObjectURL(event.target.files[0]);
        var preview8 = document.getElementById("photo-previewer8");
        preview8.src = src8;
        preview8.style.display = "block";
    }
}
//* End of JavaScript for Photo Uploading/Preview 

//* Navbar Javascript for Scroll Background Color
$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
//* End of Navbar Javascript for Scroll Background Color