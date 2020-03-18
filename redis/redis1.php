<?php
    for($i=1;$i<=100;$i++){
        echo "&nbsp;<button class='set'>$i</button>&nbsp;";
        if($i%10 ==0){
            echo "<br>";
        }
    }
?>
<script>
    var sets = document.getElementsByClassName("set");
    for(var i=0;i<sets.length;i++)
    {
        sets[i].style.backgroundColor = '';       
        sets[i].addEventListener('click',function(e){
        var seat = confirm("是否要选择" + this.innerHTML + "号座位")
            if(seat){
                //发送ajax请求 选中此座位
                this.style.backgroundColor = 'red';   //选择后改变颜色
                var xhr = new XMLHttpRequest();
                var set_id = this.innerHTML;
                xhr.open('GET', '/sets.php?id='+set_id, true);
                xhr.send();
                xhr.onreadystatechange = function(){
                    if (xhr.readyState === XMLHttpRequest.DONE){
                        if (xhr.status === 200){
                            alert(xhr.responseText);
                        } else {
                        }
                    } else {
                    }
                }
            }
        });
    }
</script>