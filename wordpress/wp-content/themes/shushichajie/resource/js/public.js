$(function(){
	$(".open_nav_butt").click(function(event) {
		$("#mm_nav_con").show();
	});
	$("#mm_nav_con .close_nav").click(function(event) {
		$("#mm_nav_con").hide();
	});

	var _str = window.location.pathname;
	if(_str.indexOf("Default") > 0 ){
		$("#head .left_nav li").eq(0).addClass('on');
	}
	else if(_str.indexOf("about") > 0){
		$("#head .left_nav li").eq(1).addClass('on');
	}
	else if(_str.indexOf("product") > 0){
		$("#head .left_nav li").eq(2).addClass('on');
	}
	else if(_str.indexOf("shop") > 0){
		$("#head .left_nav li").eq(3).addClass('on');
	}
	else if(_str.indexOf("join") > 0){
		$("#head .left_nav li").eq(4).addClass('on');
	}
	else if(_str.indexOf("manor") > 0){
		$("#head .right_nav li").eq(0).addClass('on');
	}
	else if(_str.indexOf("cooperation") > 0){
		$("#head .right_nav li").eq(0).addClass('on');
	}
	else if(_str.indexOf("news") > 0){
		$("#head .right_nav li").eq(1).addClass('on');
	}
	else if(_str.indexOf("contact") > 0){
		$("#head .right_nav li").eq(2).addClass('on');
	}
	else{
		$("#head .left_nav li").eq(0).addClass('on');
	};

	$(".er_nav_wp a").each(function(index, el) {
		console.log(index)
		if(index==0){
			$(".er_nav_wp a").eq(index).find('h6').text('壹')
		}
		else if(index==1){
			$(".er_nav_wp a").eq(index).find('h6').text('贰')
		}
		else if(index==2){
			$(".er_nav_wp a").eq(index).find('h6').text('叁')
		}
		else if(index==3){
			$(".er_nav_wp a").eq(index).find('h6').text('肆')
		}
		else if(index==4){
			$(".er_nav_wp a").eq(index).find('h6').text('伍')
		}
		else if(index==5){
			$(".er_nav_wp a").eq(index).find('h6').text('陆')
		}
		else if(index==6){
			$(".er_nav_wp a").eq(index).find('h6').text('柒')
		}
		else if(index==7){
			$(".er_nav_wp a").eq(index).find('h6').text('捌')
		}
		else if(index==8){
			$(".er_nav_wp a").eq(index).find('h6').text('玖')
		}
		else if(index==9){
			$(".er_nav_wp a").eq(index).find('h6').text('拾')
		}
	});

	if(getQueryString('id')){
		console.log(getQueryString('id'));
		var _idnex = $(".er_nav_wp a").size();
		for (var i = 0; i < _idnex; i++) {
			console.log()
			if($(".er_nav_wp a").eq(i).find('.item').attr('data-id')==getQueryString('id')){
				$(".er_nav_wp a").eq(i).find('.item').addClass('on');
			}
		}
	}
	// else{
	// 	$(".er_nav_wp a").eq(0).find('.item').addClass('on');
	// }
})

function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return decodeURIComponent(r[2]);
	return null;
};