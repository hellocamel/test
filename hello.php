<?php
//just test

<html>

<body>
<form id="from1" name="from1" method="post" action="add.handle.php">
  <table width='779' border='0' cellpadding='8' cellspacing='1'>
    <tr>
      <td colspan='2' align="center">发布文章</td>
      </tr>

    <tr>
      <td width='800'>标题</td>
      <td width='800'><lable for='title'></lable>
        <input type="text" name="title" id="title" /></td>
        </tr>

    <tr>
      <td>作者</td>
      <td><input type='text' name='author' id='author' /></td>
    </tr>

    <tr>
      <td>简介</td>
      <td><lable for='des'></lable>
        <textarea name='des' id='des' cols='60' rows='5'></textarea></td>
    </tr>

    <tr>
      <td>内容</td>
      <td><textarea name='content' cols='60' rows='15' id='content'></textarea></td>
    </tr>

    <tr>
      <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
        </tr>
    </table>
  </form>
</body>
</html>
?>