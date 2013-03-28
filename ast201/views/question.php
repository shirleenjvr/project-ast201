<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tutorial - demoQuestion</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>demoQuestion - Raw Output</h1>

	<div id="body">
		<p>The page you are looking at is outputting raw data from a tutorial controller action.</p>

		<p>Output:</p>
		<code>
        	<?
				print_r($rows);
			?>
        </code>
        
        <p>Structured Output:</p>
        <code>
            <?
				$item = 0;
        		foreach($rows as $row)
				{
					echo "<b>Data Item: " . $item . "</b><br />";
					
					foreach($row as $key => $value)
					{
						echo "$key: $value<br />";
					}
					
					echo "<br /><br />";
					$item++;
				}
        	?>
        </code>
        
        <p>Question:</p>
        <code>
          <?
            $this->load->helper('form');
          
            echo form_open();
            
            echo $rows[0]->question;
            echo '<br /><br />';
            
            $items = 4;
            
            $values = array('Poor Quality', 'Adequate Quality', 'Good Quality', 'Excellent Quality');
            
            for($i = 1; $i <= $items; $i++)
            {
            
              $data = array(
                'name'        => 'option1',
                'id'          => 'option1-1',
                'value'       => $values[$i-1],
                'checked'     => FALSE,
              );
            
              echo form_radio($data);
              echo $values[$i-1];
              echo '<br />';
              
            }
            
            echo form_submit('submit', 'Send');
            
            echo form_close();
            
          ?>
        </code>
        
        <p>Raw $_POST Data:</p>
        <code>
          <?
            print_r($_POST);
          ?>
        </code>
        
        <p><a href="<? echo base_url("/main"); ?>">Click Here</a> to return to the Main controller.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
