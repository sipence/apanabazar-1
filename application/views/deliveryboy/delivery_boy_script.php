<script src="<?=base_url('assets/js/functions.js')?>"></script>
<script src="<?=base_url('assets/js/load_function.js')?>"></script>
<script type="text/javascript">
    $(function () {
        load_report();
        // $("#showtablereport").DataTable();
    });
      $('#frmAggregator').submit(function (e) {
        e.preventDefault();
        submitform(this,'btnSubmit','txtid');
    });
    function load_report() {
        $.ajax({
            type:'post',
            url:"<?=base_url('Aggregator/report_deliveryboy')?>",
            dataType:'json',
            success :function (data) {
                console.log(data);
                if (data.status!=false){
                    var htmldata="";
                    var count=1;
                    for (var i in data.data) {
                        htmldata +=`<tr><td>${count}</td><td>${data.data[i].name}</td><td>${data.data[i].guardianname}</td><td>${data.data[i].presntaddress}</td><td>${data.data[i].permanentaddress}</td><td>${data.data[i].genderid}</td><td>${data.data[i].age}</td><td>${data.data[i].mobile}</td><td>${data.data[i].emailid}</td><td>${data.data[i].pancard}</td><td>${data.data[i].aadharnumber}</td></tr>`;
                        if (data.data[i].isactive==1){
                            htmldata +="<i id='activeInactive"+data.data[i].id+"' class='fa fa-toggle-on fa-2x' onclick='active_inactive("+data.data[i].id+",1)'></i>"+"</td></tr>";
                        }else if (data.data[i].isactive==0){
                            htmldata +="<i class='fa fa-toggle-off fa-2x' onclick='active_inactive("+data.data[i].id+",0)'></i>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
                        }
                        count++;
                    }
                    jQuery("#report_delivery_boy").html(htmldata);
                }
            }
        })
    }
    function active_inactive(rowid,isactive) {
        active_inactive_records(rowid,isactive,"<?=base_url('Usertype/isactive_usertype')?>");
    }
      $("#aggregatorType").change(function () {
          if($(this).val()==1){
              $(".comp").show();
              $(".indi").hide();
              $("#nameLabel").html('Company Name');
          }else{
              $("#nameLabel").html('Name');
              $(".comp").hide();
              $(".indi").show();
          }
      });
</script>