        <footer></footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        
    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let errors = @json($errors->all());
            if (errors.length > 0) {
                Swal.fire({
                    title: 'Validation Errors',
                    html: '<ul style="color:red">' + errors.map(error => `<li>${error}</li>`).join('') + '</ul>',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>
    @endif

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let msg = "<?= session('success')?>";
            Swal.fire({
                title: 'Success',
                html: '<div>'+ msg +'</div>',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

    <script>
    $( document ).ready(function() {
    $(".contactinfoul li").on('click',function(){
        // $(".contactinfoul li").removeClass('activeinsideofleftbar');
        localStorage.setItem("activemenu", $(this).attr('class'));
        // $(".contactinfoul li ."+localStorage.getItem('activemenu')).addClass('activeinsideofleftbar');
        // $(".cmpnycontact").addClass('activeinsideofleftbar');
        // alert("call");
    });
    if(localStorage.getItem('activemenu') !=''){
        $(".contactinfoul li").removeClass('activeinsideofleftbar');
        $("."+localStorage.getItem('activemenu')).addClass('activeinsideofleftbar');
    }
});
    //     function closeme(){
    //         document.getElementById("formaddcompany").style.display ="none"
    //     }
        
    //     function openme(){
    //         $("#formaddcompany").css("display","block");
    //     }
    //     function tabon(e){
    //         for (let index = 0; index < document.getElementsByClassName("tabb").length; index++) {
    //             document.getElementsByClassName("tabb")[index].classList.remove("tabmy")
                
    //         }
            
    //         e.classList.add("tabmy")
    //     }
    
    // function opencutomtable(){
    //         document.getElementsByClassName("cutomizetable")[0].style.height ="300px"
    //         document.getElementsByClassName("cutomizetable")[0].style.opacity = "1"
    //     }
    
    //     function Closecutomtable(){
    //         document.getElementsByClassName("cutomizetable")[0].style.height ="0"
    //         document.getElementsByClassName("cutomizetable")[0].style.opacity = "0"
    //     }
    </script>
    
    </body>
</html>
