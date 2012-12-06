(function($){
    $.fn.extend({
        delList: function(jumpurl,url,db){
			var root=$(this);
			 root.submit(function(){
				var del=root.find('input:checked').val();
				var id=$("[name='id']");
				var ids='';
				if(del=="true"){
					id.each(function(){
					if($(this).attr('checked'))
					ids+=$(this).val()+",";
				    });
					var len=ids.length-1;
					var ids=ids.substr(0,len);
					$.ajax({
					  url:""+url+"",
					  type:'post',
					  data:'id='+ids+'&db='+db,
					  success:function(data){
						  location.href=""+jumpurl+"";
						  }	
					});
				}
				return false;
				});	
		}});
 })(jQuery);	
// JavaScript Document