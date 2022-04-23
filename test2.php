<?php 
echo 'Không thay đổi';
echo 'dòng này sẽ thay đổi ở nhánh 1';
if($i=0){
    echo 'Nội dung nhánh 2 đã thay đổi (test2)';
}
echo 'không thay đổi';
echo 'Dòng sẽ thay đổi ở nhánh 1';
echo 'dòng ko thay đổi';
if($i=2){
    echo 'Nội dung nhánh 2 đã thay đổi (test2)';
    echo 'Nội dung nhánh 2.1 đã thay đổi (test2)';
}
echo 'dòng ko thay đổi';
echo 'dòng thay đổi ở nhánh 1';
?>