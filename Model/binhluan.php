<?php
class binhluan{
function insertBinhLuan($idkh,$idhanghoa,$content)
{
    $db=new connect();
    $query="insert into comment(idcomment,idkh,idhanghoa,content,luotthich)
     values (NULL,$idkh, $idhanghoa,'$content',0)";
    $db->exec($query);
}

// hiển thị nội dung văn bản
function selectComment($idmasp)
{
    $db=new connect();
    $select="select b.username, a.content from comment a, khachhang b 
    WHERE a.idkh=b.makh and a.idhanghoa=$idmasp";
    $result=$db->getList($select);
    return $result;
}
}
?>