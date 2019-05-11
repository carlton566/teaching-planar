$(document).ready(function() 
 {
	fillCategory();
	function fillCategory(){ 
		// this function is used to fill the category list on load
		addOption(document.drop_list.Category, "1", "SEM 1");
		addOption(document.drop_list.Category, "2", "SEM 2");
		addOption(document.drop_list.Category, "3", "SEM 3");
		addOption(document.drop_list.Category, "4", "SEM 4");
		addOption(document.drop_list.Category, "5", "SEM 5");
		addOption(document.drop_list.Category, "6", "SEM 6");
		addOption(document.drop_list.Category, "7", "SEM 7");
		addOption(document.drop_list.Category, "8", "SEM 8");
	}
	$("#a").change(function() {
		// ON selection of category this function will work
		
		removeAllOptions(document.drop_list.SubCat);
		addOption(document.drop_list.SubCat, "", "Select Subject");

		if(document.drop_list.Category.value == '1'){
			addOption(document.drop_list.SubCat,"Applied Maths 1", "Applied Maths 1");
			addOption(document.drop_list.SubCat,"BEE", "BEE");
			addOption(document.drop_list.SubCat,"Applied Physics 1", "Applied Physics 1");
			addOption(document.drop_list.SubCat,"Applied Chemistry 1", "Applied Chemistry 1");
			addOption(document.drop_list.SubCat,"Engineering Mechanics", "Engineering Mechanics");
			addOption(document.drop_list.SubCat,"EVS", "EVS");
		}
		if(document.drop_list.Category.value == '2'){
			addOption(document.drop_list.SubCat,"Applied Maths 2", "Applied Maths 2");
			addOption(document.drop_list.SubCat,"SPA", "SPA");
			addOption(document.drop_list.SubCat,"Applied Physics 2", "Applied Physics 2");
			addOption(document.drop_list.SubCat,"Applied Chemistry 2", "Applied Chemistry 2");
			addOption(document.drop_list.SubCat,"Engineering Drawing", " Engineering Drawing");
			addOption(document.drop_list.SubCat,"CS", "CS");
		}
		if(document.drop_list.Category.value == '3'){
			addOption(document.drop_list.SubCat,"Applied Maths 3", "Applied Maths 3");
			addOption(document.drop_list.SubCat,"DSA", "DSA");
			addOption(document.drop_list.SubCat,"OOPM", "OOPM");
			addOption(document.drop_list.SubCat,"ADC", "ADC");
			addOption(document.drop_list.SubCat,"PADC", "PADC");
			addOption(document.drop_list.SubCat,"DBMS", "DBMS");
		}
		if(document.drop_list.Category.value == '4'){
			addOption(document.drop_list.SubCat,"Applied Maths 4", "Applied Maths 4");
			addOption(document.drop_list.SubCat,"CN", "CN");
			addOption(document.drop_list.SubCat,"COA", "COA");
			addOption(document.drop_list.SubCat,"AT", "AT");
			addOption(document.drop_list.SubCat,"WP", "WP");
			addOption(document.drop_list.SubCat,"ITC", "ITC");
		}
		if(document.drop_list.Category.value == '5'){
			addOption(document.drop_list.SubCat,"OS", "OS");
			addOption(document.drop_list.SubCat,"ADBMS", "ADBMS");
			addOption(document.drop_list.SubCat,"OST", "OST");
			addOption(document.drop_list.SubCat,"CGVR", "CGVR");
			addOption(document.drop_list.SubCat,"MCES", "MCES");
			addOption(document.drop_list.SubCat,"BCE", "BCE");
		}
		if(document.drop_list.Category.value == '6'){
			addOption(document.drop_list.SubCat,"DMBI", "DMBI");
			addOption(document.drop_list.SubCat,"SWS", "SWS");
			addOption(document.drop_list.SubCat,"AIT", "AIT");
			addOption(document.drop_list.SubCat,"SE", "SE");
			addOption(document.drop_list.SubCat,"DS", "DS");
		}
		if(document.drop_list.Category.value == '7'){
			addOption(document.drop_list.SubCat,"SPM", "SPM");
			addOption(document.drop_list.SubCat,"IS", "IS");
			addOption(document.drop_list.SubCat,"WT", "WT");
			addOption(document.drop_list.SubCat,"E1", "E1");
		}
		if(document.drop_list.Category.value == '8'){
			addOption(document.drop_list.SubCat,"SNMR", "SNMR");
			addOption(document.drop_list.SubCat,"BDA", "BDA");
			addOption(document.drop_list.SubCat,"CSM", "CSM");
			addOption(document.drop_list.SubCat,"E2", "E2");
		}
	});
	$("#b").change(function(){
		showmessage();
	});
	function showmessage(){
		$.ajax({
				type:"post",
		        url:"prentry.php",
		        data:"sem="+document.drop_list.Category.value+"&sub="+document.drop_list.SubCat.value+"&action=showmessage",
		        success: function(r){
					//alert(r);
					var rr=r.substr(2,r.length-4);
					var rs=rr.split('","');
					var rt=[];
					for(var i=0;i<rs.length;i++)
						rt.push(rs[i].split(","));
					var dt=$("#subdatatable");
					dt.empty();
					for(var i=0;i<rt.length;i++)
						dt.append('<tr><td><input type="number" rows="1" cols="2" min="1" id="l" name="Lect no."  value="'+rt[i][0]+'"> </td><td><textarea rows="2" cols="18" wrap="hard"  required id="c" name="contcov">'+rt[i][1]+'</textarea> </td><td><textarea rows="2" cols="15" wrap="hard" required  id="cc" name="contncov">'+rt[i][2]+'</textarea> </td><td><textarea rows="2" cols="10" wrap="hard" required id="r" name="ref">'+rt[i][3]+'</textarea> </td><td><textarea rows="2" cols="10" wrap="hard" required id="m" name="meth">'+rt[i][4]+'</textarea> </td><td><textarea rows="2" cols="10" wrap="hard" required id="mmm" name="mapp">'+rt[i][5]+'</textarea> </td><td><textarea rows="2" cols="10" wrap="hard" required id="rr" name="remarks">'+rt[i][6]+'</textarea> </td><td><textarea rows="2" cols="10" wrap="hard" required id="rr" name="verified">'+rt[i][7]+'</textarea> </td></tr>');
				}
			});
	}
	$(document).on('click','#button',function() {
		var lec = $( "#l" ).val();
		var contcov = $( "#c" ).val();
		var contncov = $( "#cc" ).val();
		var ref = $( "#r" ).val();
		var meth = $( "#m" ).val();
		var mapp = $( "#mmm" ).val();
		var remarks = $( "#rr" ).val();
		var fac = $( "#fac" ).val();
		var data1="sem="+document.drop_list.Category.value+"&sub="+document.drop_list.SubCat.value+"&lec="+lec+"&contcov="+contcov+"&contncov="+contncov+"&ref="+ref+"&meth="+meth+"&mapp="+mapp+"&remarks="+remarks+"&fac="+fac+"&action=addmessage";
		if(lec==""||contcov==""||contncov==""||ref==""||meth==""||mapp==""||remarks==""||fac=="") {
			alert("Fill in the fields and then proceed");
		}
		else {		
			$.ajax({      
				type: "post",
				url: "prentry.php",
				data: data1,
				success: function(r){
					showmessage();
				}
			});
		}					
	});
////////////////// 
function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}
});