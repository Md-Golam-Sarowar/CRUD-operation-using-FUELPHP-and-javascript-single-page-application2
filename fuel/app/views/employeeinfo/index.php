<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<script type="text/javascript">
var HttpClient = function() {
 this.get = function(aUrl, aCallback) {
 var anHttpRequest = new XMLHttpRequest();
 anHttpRequest.onreadystatechange = function() { 
 if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
 aCallback(anHttpRequest.responseText);
 }
 anHttpRequest.open( "GET", aUrl, true ); 
 anHttpRequest.send( null ); 
 }
 }
 var theurl='https://linkstaffemployee.000webhostapp.com/Welcome/view';
 var client = new HttpClient();
 client.get(theurl, function(response){
  // var response1 = JSON.parse(response);
  alert(response);
 });
</script>

</head>
  <body>
   <br>         <table border="0" cellpadding="0" cellspacing="0" style="width:40%">
              <tbody>
                <tr>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Company Name</th>
                  <th>Joining_date</th>
				  <th>Operations</th>
                </tr>
                 <tr tal:repeat="ad data">
                  <td tal:content="ad/id">Name</td>
                  <td tal:content="ad/Name" >Designation</td>
                  <td tal:content="ad/a_href">Company_name</td>
                  <td tal:content="ad/Price">Joining_date</td>
                  <td><a href="employeeinfo/edit.html?id=${ad/id}" >Edit</a>&nbsp;/&nbsp;<a href="employeeinfo/delete.html?id=${ad/id}">Delete</a></td>
                </tr>
              </tbody>
            </table>
          </div>
<br> <br>
            <div class="mg_b20">
              <a href="employeeinfo/add.html" >Add Information</a>
            </div>
        </div>

      </div>

  </body>
</html>
