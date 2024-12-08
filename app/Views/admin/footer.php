
	


    </div>    
</div>
 
<!-- Start Main project js, jQuery, Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/yearPicker/yearpicker.css')?>"/>
<script src="<?php echo base_url('public/assets/plugins/yearPicker/yearpicker.js')?>"></script>

<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/toastr/toastr.css')?>" />
<script src="<?php echo base_url('public/assets/plugins/toastr/toastr.js')?>"></script>
 <script src="<?php echo base_url('public/assets/js/preloader/main.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/dist/jquery.inputmask.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/bootstrap4_datepicker/js/bootstrap-datetimepicker.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script><!-- <script src="<?php// echo base_url('public/assets/plugins/dropify/js/dropify.min.js')?>"></script> -->
<script src="<?php echo base_url('public/assets/plugins/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('public/assets/plugins/DataTables/datatables.min.js')?>"></script>

<!-- Printing plugins -->
<script src="<?php echo base_url('public/assets/plugins/print-js/print.min.js')?>"></script>

<!-- Start all plugin js -->
<!-- <script src="<?php //echo base_url('public/assets/bundles/counterup.bundle.js')?>"></script> -->
 <script src="<?php echo base_url('public/assets/bundles/apexcharts.bundle.js')?>"></script>
 <script src="<?php echo base_url('public/assets/bundles/echarts.bundle.js')?>"></script>
<script src="<?php echo base_url('public/assets/bundles/summernote.bundle.js')?>"></script>
<!-- <script src="<?php //echo base_url('public/assets/bundles/fullcalendar.bundle.js')?>"></script> -->

<!-- Start project main js  and page js -->
<script src="<?php echo base_url('public/assets/js/core.js')?>"></script>


	
<script>

$(document).ready(function () {
  $('#myTable').DataTable();
});

$(document).ready(function(){ 
    $(":input").inputmask();     
});

$('.collapse').on('show.bs.collapse', function () {
	$('.collapse.in').each(function(){
	$(this).collapse('hide');
});
});

$(document).on('click', '.toggle', function(event) {
  event.preventDefault();
  
  var target = $(this).data('target');
  $('#' + target).toggleClass('hide');
});


document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 


</script>



</body>
</html>
<script>
    var userAgent = navigator.userAgent;

if (userAgent.match(/Android/i)) {
    $('#smallScreenTab').show();
    $('#largeScreenTab').hide();
} else if (userAgent.match(/Windows/i)) {
      $('#smallScreenTab').hide();
    $('#largeScreenTab').show();
}else{
    //alert('undefined');
    $('#smallScreenTab').show();
    $('#largeScreenTab').hide();

var customStyle = document.createElement('style');
customStyle.innerHTML = `
   /* CSS rules go here */
  
   .modal-body {
    max-height: 60vh; /* Adjust the maximum height as needed */
    overflow-y: auto;
}
.modal-xl {
        max-width: 90%; /* Adjust the width as needed */
        margin: 10% auto; /* Center the modal vertically */
    }
`;

document.head.appendChild(customStyle);
}
 $(document).ready(function () {
       
      //var idleInterval = setInterval(CheckIdleTime, 1000);
      //  var CheckExpiredSession = setInterval(ExpiredSession, 1000);
        $(this).mousemove(function (e) {
            idleTime = 0;
        });
        $(this).keypress(function (e) {
            idleTime = 0;
        });
     // CheckExpiredSession();
    });   
  function CheckIdleTime() {
    
    if (typeof idleTime === 'undefined') {
    // Variable is undefined
     idleTime = 0;
   // console.log('Variable is undefined');
    } 
        idleTime = idleTime + 1;
       console.log('it is here '+idleTime);
        if(idleTime > 1800) {
           // alert(localStorage.tabCount);
            if(localStorage.tabCount==1){
         window.location.replace('<?php echo base_url('/Logout'); ?>');
            }else{
            window.location.replace('<?php echo base_url('/Logout2'); ?>');
           }
        }
    }

    function ExpiredSession(){
         $.ajax({
             url: '<?php echo base_url() . '/index.php/LogoutController/checkSession'; ?>',
               success: function (result) {
                if(result==0){
                window.location.replace('<?php echo base_url('/Logout'); ?>');
                }  
                },
                error: function () {
                console.log("Error checking session status:");
               }
            });
    }  
                      $(function () {  
                                var start = moment();
                                var end = moment();
                                function cb(start, end) {
                                    $('#daterange-all span').html(start.format('YYYY/M/D') + ' - ' + end.format('YYYY/M/D'));
                                }
                                $('.daterange-all').daterangepicker({
                                    startDate: start,
                                    endDate: end,
                                    ranges: {
                                        'Today': [moment(), moment()],
                                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                                         'This Year': [moment().startOf('year'), moment().endOf('year')],
                                        'Last Year': [moment().subtract(1, 'year').startOf('month'), moment().subtract(1, 'year').endOf('year')],
                                    }
                                }, cb);
                                cb(start, end);

                            }); 

        $(function () {
        const currentYear = new Date().getFullYear();  
         $('#button-y').yearpicker({
            year:currentYear,
           startYear:2022,
           endYear:currentYear+1,
      
         });
        
          });

window.onload = function () {
    if (localStorage.tabCount) {
        if(Number(localStorage.tabCount) <=0){
       localStorage.tabCount = 1;
        }else{
          localStorage.tabCount = Number(localStorage.tabCount) + 1;   
        }
       
    } else {
        localStorage.tabCount = 1;
    }
    console.log("Number of tabs open: " + localStorage.tabCount);
};

window.onbeforeunload = function () {
    localStorage.tabCount = Number(localStorage.tabCount) - 1;
};

    </script>