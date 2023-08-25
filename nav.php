<nav id="nav">
    <div class="span">
        <button class="burger" onclick="sidemenu" type="button"></button>
        <div class="b_menu">
            <ul>
                <li>
                    <div class="b1">
                        <h2>NEW50%</h2>
                        <a href="#"><img src="./image/b1.png" alt=""></a>
                    </div>
                    <div class="b2">
                    <h2>BEST</h2>
                    <a href="#"><img src="./image/b2.png" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="b3">
                        <h2>원피스</h2>
                        <a href="#">원피스</a>
                    </div>
                    <div class="b4">
                        <h2>아우터</h2>
                        <a href="#">가디건</a>
                        <a href="#">자켓/블레이저</a>
                        <a href="#">코트</a>
                        <a href="#">점퍼/집업</a>
                        <a href="#">패딩</a>
                    </div>
                </li>
                <li>
                    <div class="b5">
                        <h2>상의</h2>
                        <a href="#">블라우스/셔츠</a>
                        <a href="#">티셔츠/맨투맨</a>
                        <a href="#">니트</a>
                    </div>
                    <div class="b6">
                        <h2>아우터</h2>
                        <a href="#">팬츠</a>
                        <a href="#">스커트</a>
                    </div>
                </li>
                <li>
                    <div class="b7">
                        <h2>세트룩</h2>
                        <a href="#">세트룩</a>
                    </div>
                    <div class="b8">
                        <h2>신발</h2>
                        <a href="#">구두/부츠</a>
                        <a href="#">운동화/슬립온/플랫</a>
                        <a href="#">샌들/슬리퍼</a>
                    </div>
                </li>
                <li>
                    <div class="b9">
                        <h2>홈/이너웨이</h2>
                        <a href="#">속옷</a>
                        <a href="#">파자마</a>
                        <a href="#">침구세트</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="menu">
        <li><a href="#">NEW50%</a></li>
        <li><a href="#">BEST</a></li>
        <li><a href="#">원피스</a></li>
        <li><a href="#">아우터</a></li>
        <li><a href="#">상의</a>
            <ul class="e_sub">
                <li class="e_sub_left">
                    <h1><a href="#">티셔츠</a></h1>
                    <a href="#">블라우스/셔츠</a>
                    <a href="#">티셔츠/맨투맨</a>
                    <a href="#">니트</a>
                </li>
                <li class="e_sub_right">
                    <img src="./image/sub1.jpg" alt="">
                    <img src="./image/sub2.jpg" alt="">
                    <img src="./image/sub3.jpg" alt="">
                </li>
            </ul>
        </li>
        <li><a href="#">하의</a></li>
        <li><a href="#">세트룩</a></li>
        <li><a href="#">신발</a></li>
        <li><a href="#">홈/이너웨이</a></li>
        <li><a href="#">패션잡화</a></li>
    </ul>
</nav>
<script>
    const sub = document.querySelectorAll('.e_sub')
    const menu = document.querySelectorAll('#nav .menu > li')
    // 상의
    for(let i of sub ){i.style.display = 'none'}
    menu[4].addEventListener('mouseover',function(){
        sub[0].style.display = 'flex';
    })
    menu[4].addEventListener('mouseout',function(){
        sub[0].style.display = 'none';
    })
    sub[0].addEventListener('mousefover',function(){
        sub[0].sytle.display = 'flex'
    })
    const span = document.querySelector('.span')
    const sidemenu = document.querySelector('.burger')
    const b_menu = document.querySelector('.b_menu')
    console.log(sidemenu, b_menu, span)
    span.addEventListener('click',function(e){
    const b_menu = document.querySelector('.b_menu')
    e.currentTarget.classList.toggle('active')
    b_menu.classList.toggle('showHide')
})

</script>