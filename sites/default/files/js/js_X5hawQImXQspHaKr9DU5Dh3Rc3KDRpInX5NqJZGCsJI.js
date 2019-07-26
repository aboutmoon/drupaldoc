(function () {
    if (document.getElementsByClassName('page-node-type-manuals').length > 0) {

        // left column scroll to active item
        var manuals_menu_item_active = document.querySelector(".page-node-type-manuals .menu-item--active-trail");
        if (manuals_menu_item_active) {
            manuals_menu_item_active.scrollIntoView();
        }


        var h1s = document.querySelectorAll("article.node--type-manuals h1");
        var ul_pagetoc = document.querySelector('#pagetoc ul.pagetoc');

        if (h1s.length <= 0) {

            document.getElementById("right-content-wrapper").style.display = "none";

        } else {

            for (var i = 0; i < h1s.length; i++) {
                ul_pagetoc.appendChild(newli(h1s[i].textContent, '#' + h1s[i].id));
            }


            var aList = document.querySelectorAll('#pagetoc ul.pagetoc a');
            //给每一个a标签注册点击事件
            for( var i=0;i < aList.length;i++) {
                aList[i].addEventListener('click', function (e) {
                    //阻止a标签的默认行为
                    e = e || window.event;
                    e.preventDefault();
                    //获取整个href路径
                    // var target = this.href;
                    //获取#片段识别符
                    var target = this.hash.substr(1);
                    //获取box参照于body定位的top值
                    var offsetTop = document.getElementById(target).offsetTop;
                    //将页面跳转到对应的位置
                    document.documentElement.scrollTop = offsetTop;
                });


            }

            window.onscroll = function() {
                var pos = document.documentElement.scrollTop;
                var selectedLi = document.querySelector('#pagetoc ul.pagetoc a.selected');

                if (selectedLi) {
                    selectedLi.classList.remove('selected');
                }


                for (var i = 1; i <= h1s.length; i++) {
                    if (i == h1s.length || h1s[i].offsetTop > pos) {
                        var selectA = document.querySelector('#pagetoc ul.pagetoc a[href="#' + h1s[i-1].id + '"]');
                        if (selectA) {
                            selectA.classList.add('selected');
                        }
                        break;
                    }
                }
            }
        }




    }
    
    function newli(name, href) {
        var li = document.createElement('li');
        li.className = 'pagetoc';
        li.name = name;
        var a = document.createElement('a');
        a.href = href;
        a.className = 'pagetoc';
        a.textContent = name;
        li.appendChild(a);
        return li;
    }

})();

;
