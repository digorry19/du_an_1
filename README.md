# longdz
$thongbao_thanhcong = custompopup
if (isset($thongbao_thanhcong['tenloai']) && ($thongbao_thanhcong['tenloai'] != ""))
                        echo '<script type="text/javascript">
                            var popup = document.createElement("div");
                            popup.innerHTML = "'.$thongbao_thanhcong['tenloai'].'";
                            popup.className = "custom-popup";
                            document.body.appendChild(popup);

                            setTimeout(function(){
                                document.body.removeChild(popup);
                            }, 3000);
                        </script>';





$thongbao = custompopup2
if (isset($thongbao['tenloai']) && ($thongbao['tenloai'] != ""))
                        echo '<script type="text/javascript">
                        var popup = document.createElement("div");
                        popup.innerHTML = "'.$thongbao['tenloai'].'";
                        popup.className = "custom-popup2";
                        document.body.appendChild(popup);

                        setTimeout(function(){
                            document.body.removeChild(popup);
                        }, 3000);
                    </script>';# du_an_1
