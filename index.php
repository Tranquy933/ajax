
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include('includes/inc_js.php'); ?>
    </head>
    <body>
        <div id="result"></div>
        <br/>
        <input type="button" name="clickme" id="json-click" value="List SV"/>
        <script language="javascript">
            $('#json-click').click(function()
            {
                $.ajax({
                    url : 'json.php',
                    type : 'get',
                    dataType : 'json',
                    success : function (student){
                         
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                           	html += '<td>';
                            html += 'Ma SV';
                            html += '</td>';
                            html += '<td>';
                            html += 'Ten';
                           	html += '</td>';
                       		html += '<td>';
                            html += 'Birthday';
                            html += '</td>';
                            html += '<td>';
                            html += 'Home_town';
                           	html += '</td>';
                        html += '<tr>';
                        $.each(student, function (key, item){
                            html +=  '<tr>';
                                html +=  '<td>';
                                html +=  item['ma_sv'];
                                html +=  '</td>';
                                html +=  '<td>';
                                html +=  item['name'];
                                html +=  '</td>';
                                html +=  '<td>';
                                html +=  item['birthday'];
                                html +=  '</td>';
                                html +=  '<td>';
                                html +=  item['home_town'];
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                        
                        html +=  '</table>';
                         
                        $('#result').html(html);
                    }
                });
            });
        </script>
    </body>
</html>
