<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="con">
<div style="height:4.2em;"></div>
  <header>
    <nav class="ect-nav ect-bg icon-write">
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
    </nav>
  </header>
  
  
  <div class="huadong swiper-container">
  	
  	<ul class="swiper-wrapper">
  			<li class="swiper-slide color_0 set_color">
  				<a href="javascript:select1(0)">全部分类</a>
  			</li>
  			<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?> 
  			<li  class="swiper-slide color_<?php echo $this->_var['cat']['id']; ?>">
  						<a href="javascript:select(<?php echo $this->_var['cat']['id']; ?>)"><?php echo $this->_var['cat']['name']; ?></a>
  			</li>
  			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  			
  	</ul>
  	
  </div>
  <div class="bran_list" id="J_ItemList" style="opacity:1; padding-top: 2em;">
    <ul class="single_item">
    </ul>
    <a href="javascript:;" class="get_more"></a> </div>
</div>

<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
  
window.onload=function(){
	
//	alert(window.location.host);
	get_asynclist("<?php echo url('alliance/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'],'cat_id'=>0));?>" , '__TPL__/images/loader.gif');
	 var head = $("head").remove("script[id='morejs']");

   $("<scri" + "pt>" + "</scr" + "ipt>").attr({role: 'reload', src: '__PUBLIC__/js/jquery.more.js', type: 'text/javascript'}).appendTo(head);

}
function select(id){
	var class_id='.color_'+id;
	$('.set_color').removeClass('set_color')
	$(class_id).addClass('set_color')
	if($('#J_ItemList .single_item').length>1){
		 	$('#J_ItemList div').remove();
	    $('.single_item').remove();
	     $('.get_more').remove();
	    var str="<ul class='single_item'></ul><a href='javascript:;' class='get_more'></a>"
	    $('#J_ItemList').prepend(str);
	}
	if(window.location.host == 'localhost'){
		var host_url='/ecshop_v3.0.0_utf8_release0530';
	}else{
		var host_url='http://'+ window.location.host;
	}
	var url_str=host_url+"/mobile/index.php?m=default&c=alliance&a=asynclist&page=0&sort=goods_id&order=DESC&dianji=1&cat_id="+id;
//alert(url_str);


  	get_asynclist(url_str, '__TPL__/images/loader.gif');
  	 var head = $("head").remove("script[id='morejs']");
  	 
   $("<scri" + "pt>" + "</scr" + "ipt>").attr({role: 'reload', src: '__PUBLIC__/js/jquery.more.js', type: 'text/javascript'}).appendTo(head);
	

}
function select1(id){
	$('.set_color').removeClass('set_color')
	$('.color_0').addClass('set_color')
	
	if($('.single_item').length>1){
		 	$('#J_ItemList div').remove();
	    $('.single_item').remove();
	    $('.get_more').remove();
	    var str="<ul class='single_item'></ul><a href='javascript:;' class='get_more'></a>"
	    $('#J_ItemList').prepend(str);

	}

  get_asynclist("<?php echo url('alliance/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'],'dianji'=>1,'cat_id'=>0));?>" , '__TPL__/images/loader.gif');
 var head = $("head").remove("script[id='morejs']");
   $("<scri" + "pt>" + "</scr" + "ipt>").attr({role: 'reload', src: '__PUBLIC__/js/jquery.more.js', type: 'text/javascript'}).appendTo(head);
	

}
</script> 
<script type="text/javascript">



	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0
    });



</script>

</body></html>