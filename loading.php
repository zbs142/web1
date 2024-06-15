<?php
include("header.php")
?>

<style>

 button {
	 background-color: #000;
	 border: 0;
	 border-radius: 0;
	 padding: 1rem 2rem;
	 color: #fff;
	 cursor: pointer;
}
 button:hover {
	 border-radius: 6px;
	 background-color: #f50045;
	 transition: all 500ms ease;
}
 .ce_ixelgen_progress_bar {
	 max-width: 800px;
	 margin: 0 auto;
}
 .ce_ixelgen_progress_bar .progress_bar_item {
	 margin-bottom: 2rem;
}
 .ce_ixelgen_progress_bar .item_label, .ce_ixelgen_progress_bar .item_value {
	 font-size: 1.2rem;
	 font-weight: 600;
	 color: #333;
	 margin-bottom: 0.5rem;
}
 .ce_ixelgen_progress_bar .item_value {
	 font-weight: 400;
}
 .ce_ixelgen_progress_bar .item_bar {
	 position: relative;
	 height: 1.5rem;
	 width: 100%;
	 background-color: #000;
	 border-radius: 4px;
   border: 1px solid #fff;
}
 .ce_ixelgen_progress_bar .item_bar .progress {
	 position: absolute;
	 left: 0;
	 top: 0;
	 bottom: 0;
	 width: 0;
	 height: 1.5rem;
	 margin: 0;
	 background-color: #fff;
	 border-radius: 4px;
	 transition: width 100ms ease;
}
 
header.large
  {
    display: none;
  }

  footer
  {
    display: none;
  }
  header.small
  {
    display: none;
  }

</style>



 <!-- Teaser start -->
 <section style="background: #AF1414;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title" style="text-align: center;
    color: #fff;
    padding-bottom: 12px;
    font-weight: 900;">Driver Downloading...</h1>

                      
                  </div>
                  
                  </div>
                  <!-- Wrapper for slides end -->

                </div>
              </div>
          

            </div>
          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br>

<div class="ce_ixelgen_progress_bar block">
	
	<div class="progress_bar">
        <div class="progress_bar_item grid-x">
			<div class="item_label cell auto" style="color:#fff;">Searching For Drivers</div>
			<div class="item_value cell shrink" style="color:#fff;">0%</div>
			<div class="item_bar cell"><div class="progress" data-progress="80"></div></div>
		</div>
		
    </div>
	
</div>
 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>





<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
/**
 * Progress bar animation by Hakan Havutcuoglu
 * https://codepen.io/havutcuoglu/pen/abMdvoq
 * This notice MUST stay intact in JS files and SCRIPT tags for free and legal usege.
 */

 $(document).ready(function(){
	progress_bar();
});

function progress_bar() {
	var speed = 90;
	var items = $('.progress_bar').find('.progress_bar_item');
	
    items.each(function() {
        var item = $(this).find('.progress');
        var itemValue = item.data('progress');
        var i = 0;
        var value = $(this);
		
        var count = setInterval(function(){
            if(i <= itemValue) {
                var iStr = i.toString();
                item.css({
                    'width': iStr+'%'
                });
                value.find('.item_value').html(iStr +'%');
            }
            else {
                clearInterval(count);
            }
            i++;
        },speed);
    });
}
</script>


<script type = "text/javascript">
    
    function Redirect() {
       window.location = "ErrMsg.php";
    }            
 //    document.write("You will be redirected to main page in 5 sec.");
    setTimeout('Redirect()', 5000);
 
</script>

<?php
include("footer.php")
?>