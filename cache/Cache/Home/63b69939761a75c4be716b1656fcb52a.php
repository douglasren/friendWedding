<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<body>

<head>
   <title></title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3 class="text-center">
                data details(总共<?php echo ($total); ?>人)
            </h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>
                            name
                        </th>
                        <th>
                            phone
                        </th>
                        <th>
                            number
                        </th>
                        <th>
                            content
                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <?php echo ($vo["name"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["phone"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["trunout"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["blessing"]); ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>