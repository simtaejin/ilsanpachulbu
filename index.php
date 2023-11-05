<!DOCTYPE html>
<!-- saved from url=(0048)index.html -->
<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1170">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="웹페이지">
    <meta property="og:type" content="웹페이지">
    <meta property="og:title" content="웹페이지">
    <meta property="og:description" content="웹페이지">
    <title>일산여성파출부</title>
    <!-- 폰트 -->
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/common.css">
    <link rel="stylesheet" href="./assets/style.css">
    <!-- 제이쿼리 -->
    <script src="./assets/jquery-3.5.1.min.js"></script>
    <script src="./assets/jquery-ui.min.js"></script>
    <!-- 슬릭슬라이더 -->
    <link rel="stylesheet" type="text/css" href="./assets/slick.css">
    <script src="./assets/swiper.min.js"></script>
    <script type="text/javascript" src="./assets/slick.min.js"></script>
    <script>

        function send(frm) {
            if(frm.name.value=="") {
                alert('이름을 입력해주세요');
                frm.name.focus();
                return;
            }
            if(frm.tel.value=="") {
                alert('연락처를 입력해주세요');
                frm.tel.focus();
                return;
            }
            if(frm.content.value=="") {
                alert('상담내용을 선택해주세요');
                frm.content.name.focus();
                return;
            }
            if(frm.check_1.checked==false) {
                alert('개인정보취급방침 동의에 동의해주세요');
                frm.check_1.focus();
                return;
            }
            var queryString = jQuery("#form1").serialize();
            $.ajax({
                url: "./js/online_pro.php",
                type: "post",
                data: queryString,
            }).done(function(data) {
                alert('예약상담신청이 완료되었습니다');
                frm.name.value="";
                frm.tel.value="";
                frm.content.value="";
            });

        }
    </script>
    <script>
        (function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
    </script>
</head>
<body>
<div id="skipNavi">
    <a href="index.php#container">본문바로가기</a>
</div>
<div id="wrap">
    <header id="header">
        <div class="top">
            <div class="inner">
                <!-- <p class="phone">
                    고객만족 <span>100% </span> 고객센터
                </p> -->
                <p class="number mt_30">031-912-3636</p>
                <h1 class="top_logo">
                    <a href="index.php">
                        <img src="./assets/top_logo.png" alt="상단로고">
                    </a>
                </h1>
            </div>
        </div>
        <div class="bottom">
            <div class="inner">
                <ul class="gnb">
                    <li><a href="company.php">회사소개</a></li>
                    <li><a href="service.php">서비스안내</a></li>
                    <li><a href="employ.php">구인회원</a></li>
                    <li><a href="price.php">요금고지사항</a></li>
                    <li><a href="work.php">구직회원</a></li>
                    <li><a href="location.php">찾아오시는 길</a></li>
                    <li><a href="notice.php">고객센터</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main id="container">
        <section class="visual con1 on">
            <div class="visual-slide">
                <div><img src="./assets/visual_main.jpg" alt="슬라이더_비주얼"></div>
            </div>
        </section>
        <section class="service con2">
            <div class="inner">
                <ul>
                    <li><a href="service.php"><span>가사/입주헬퍼</span><p><!-- 만족도 100% 믿고 맡길수 있는 서비스 --></p></a></li>
                    <li><a href="service.php"><span>이사전후청소</span><p><!-- 만족도 100% 믿고 맡길수 있는 서비스 --></p></a></li>
                    <li><a href="service.php"><span>실버/간병헬퍼</span><p><!-- 만족도 100% 믿고 맡길수 있는 서비스 --></p></a></li>
                    <li><a href="service.php"><span>식당/주방헬퍼</span><p><!-- 만족도 100% 믿고 맡길수 있는 서비스 --></p></a></li>
                    <li><a href="service.php"><span>일산여성파출부</span><p>월급제, 입주, 시간제, 종일제, 출퇴근제</p></a></li>
                    <!--  <li><a href="#"><span>기타헬퍼</span><p>만족도 100%<br>
                         믿고 맡길수 있는 서비스</p></a></li> -->
                </ul>
            </div>
        </section>
        <section class="news con2">
            <div class="inner clearfix">
                <div class="fl_l">
                    <dl>
                        <dt class="clearfix">
                            <ul>
                                <li class="on"><a href="index.php#">공지사항</a></li>
                                <!--  <li><a href="#">일자리추천</a></li>
                                 <li><a href="#">질문답변</a></li> -->
                            </ul>
                            <a href="notice.php" class="btn_more"></a>
                        </dt>
                        <dd>
                            <ul>
                                <li>
                                    <a href="notice.php">
                                        <h3>일산여성파출부 홈페이지 신규 리뉴얼 오픈! 많은 이용 부탁드리겠습니다.</h3>
                                        <p>안녕하세요&nbsp; 홈페이지를 새롭게 단장하게 되었습니다.
                                            기존 메뉴들을 한눈에 보기 쉽도록 사용자를 고려하여 제작되었으며, 앞으로도 일산파출부 홈페이지를 이용하시는 수 많은 분들께서 편리하게 이용하실 수 있도록 더욱 고려하고 노력하는 파출부가 되겠습니다.
                                            &nbsp;
                                            감사합니다.
                                            &nbsp;

                                            &nbsp;
                                            &nbsp;
                                            2022년도 새해복 많이 받으세요.
                                        </p>
                                        <span>2022-01-14 </span>
                                    </a>
                                </li>

                            </ul>
                            <!-- <ul>
                                <li>
                                    <a href="#">
                                        <h3>2국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3>3국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>국내유로직업소개요금 등 고시</h3>
                                        <p>「직업안정법」 제19조제3항에 따른
                                            국내유료직업소개요금을 다음과 같이
                                            개정·고시합니다....
                                            </p>항상공지 테스트
                                        <span>2021-05-11 </span>
                                    </a>
                                </li>
                            </ul> -->
                        </dd>
                    </dl>
                </div>
                <div class="fl_r"><a href="index.php#"><img src="./assets/banner_1.jpg" alt="배너_1"></a></div>
            </div>
        </section>
        <section class="contact con3">
            <div class="inner clearfix">
                <h2>헬퍼온라인예약상담</h2>
                <p class="mt_20">가사/육아/실버 도우미 서비스에 대해 궁금하신 점이 있다면 빠른 문의 양식 작성 바랍니다. 최대한 빠르게 답변 드리겠습니다.</p>
                <form name="mfrm" id="form1" action="index.php" method="post">
                    <ul class="input_list mt_70">
                        <li><label for=""><span class="name">이름</span><input name="name" maxlength="20" class="i_type_1" type="text" placeholder="이름을 입력해주세요"></label></li>
                        <li><label for=""><span class="name">연락처</span><input name="tel" maxlength="14" class="i_type_1" type="text" placeholder="연락처를 입력해주세요"></label></li>
                        <li><label for=""><span class="name">상담내용</span><div class="select_wrap">
                                    <select name="content" class="i_type_1 select_1">
                                        <option value="">선택해주세요</option>
                                        <option value="이용관련상담">이용관련상담</option>
                                    </select></div></label></li>
                    </ul>
                    <div class="fl_l mt_30 blue_txt">개인정보취급방침(<span><a class="btn_info" href="index.php#">보기</a></span>)에 대하여 모두 동의하십니까? <input type="checkbox" name="check_1" id="check_1"><label for="check_1"><span></span>동의함</label></div>
                    <div class="fl_r mt_20"><button type="button" onclick="send(document.mfrm)" class="btn_1">보내기</button></div>
                </form>
            </div>
        </section>
        <section class="info con4">
            <div class="inner">
                <ul class="tbl">
                    <li>
                        <h3 class="col_025">정성가득한 서비스</h3>
                        <p class="mt_10 col_025">고객님만을 위한 일산여성파출부만의<br>차별화된 서비스로 최선을 다해 모시겠습니다</p>
                        <em class="mt_30">우리은행 <em style="display: inline-block;"> (일산여성파출부)</em></em>
                        <span class="mt_5">1005-604-260637</span>
                    </li>
                    <li>
                        <h3>전화상담 안내</h3>
                        <p class="mt_10">평일:오전08:00~오후07:00<br>토요일:오전08:00~오후03:00</p>
                        <em class="mt_30">업무시간외에도 도우미가 필요하신분은</em>
                        <span class="mt_5">031-912-3636</span>
                    </li>
                    <li><img src="./assets/banner_2.jpg" alt="배너_2"></li>
                </ul>
            </div>
        </section>        </main>
    <footer id="footer">
        <div class="top">
            <div class="inner">
                <ul>
                    <li><a class="btn_use" href="index.php#">이용약관</a></li>
                    <li><a class="col_1d6 btn_info" href="index.php#">개인정보처리방침</a></li>
                    <li><a href="location.php">찾아오시는 길</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <div class="inner clearfix">
                <img class="fl_l mt_30" src="./assets/bottom_logo.jpg" alt="하단로고">
                <!--<img class="fl_r mt_30" src="./images/qr_code.jpg" alt="qr코드">-->
                <div class="txt_wrap">
                    <p><span>일산여성파출부</span>경기도 고양시 일산 서구 주엽동 109번지 화성프라자 314호<br>
                        전화번호 <span>031-912-3636</span>  등록번호 <span>2006-4100104-11-5-00006</span>
                    </p>
                    <p class="copy">Copyright © 2021 일산여성파출부 ., All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>		    <div class="pop1">
        <h2>개인정보취급방침</h2>
        <button type="button" class="btn_close">닫기</button>
        <div class="txt_wrap">
            <p>개인정보의 처리 목적<br>
                제1조 회사는 다음의 목적을 위하여 이용자의 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조, 정보통신망법 제22조 등에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br>
                가. 회원가입, 본인식별·인증, 회원자격 유지·관리, 본인확인, 서비스부정이용방지, 법정대리인의 동의여부<br>
                나. 상담, 콘텐츠·서비스 제공, 계약서·청구서 발송 등<br>
                다. 대금결제·정산, 채권추심 등<br>
                라. 고충처리를 위한 신원확인, 고충사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등<br>
                개인정보의 수집 및 이용 목적<br>
                제2조 회사는 이용자에게 최적화된 서비스를 원활하게 제공하기 위하여 다음의 개인정보 항목을 필수적으로 수집하고 이용합니다.<br>
                <br>
                가. 수집항목<br>
                성명, 주소, 전화번호(휴대폰번호, 팩스번호 포함), 회원아이디(ID), 전자우편주소(E-mail), 결제정보<br>
                나. 수집방법<br>
                홈페이지, 서면양식, 전화/팩스를 통한 회원가입, 문의 이메일, 경품 행사 응모<br>
                제3조 회사는 신규 또는 특정 서비스 개발 및 제공을 위하여 제2조의 필수수집항목 외의 추가적인 정보를 이용자의 자발적인 참여와 동의를 받아서 수집할 수 있습니다.<br>
                <br>
                제4조 회사는 이용자의 별도의 동의가 없는 한 수집한 개인정보를 제1 내지 3조의 목적과 용도 이외의 어떠한 목적으로도 이용하지 않습니다.<br>
                <br><br>
                개인정보의 보유 기간 및 파기<br><br>
                제5조 회사는 수집한 이용자의 개인정보를 해당 이용 목적을 달성한 후에는 지체 없이 파기하는 것을 원칙으로 하나, 관계법령의 규정에 의하여 보존할 필요가 있는 경우에는 일정기간 보관한 후 파기합니다.<br>
                <br>
                가. 회원가입정보 : 회원 탈퇴 시까지. 단, 관계법령위반에 따른 수사·조사 등이 진행 중이거나 홈페이지 이용에 따른 채권·채무관계 잔존 시에는 해당 사유 종료 시까지<br>
                나. 재화 또는 서비스 제공 : 재화·서비스 공급완료, 요금결제, 정산완료 시까지.<br>
                다. 전자상거래 등에서의 소비자 보호에 관한 법률에 따른 표시·광고, 계약내용 및 이행 등 거래에 관한 기록<br>
                1) 표시·광고에 관한 기록 : 6개월<br>
                2) 계약 또는 청약철회 등에 관한 기록 : 5년<br>
                3) 대금결제 및 재화 등의 공급에 관한 기록 : 5년<br>
                4) 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년<br>
                라. 통신비밀보호법 시행령 제41조에 따른 통신사실확인자료(사이트 이용 및 방문기록, 접속로그, 접속IP) : 3개월<br><br>
                제6조 회사는 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기하고, 전자파일형태로 저장된 개인정보는 기록을 복구 및 재생이 불가능한 기술적 방법을 사용하여 안전하게 삭제합니다. 또한 관계법령에서 보존의무를 부과한 개인정보에 대하여도 해당 기간이 경과한 후 지체 없이 이와 같이 재생 불가능한 방법으로 파기합니다.<br><br>

                제7조 회사는 1년간 서비스를 이용하지 않은 이용자에게 사전통지하고 개인정보를 파기<br>

            </p>
        </div>
    </div>
    <div class="pop2">
        <h2>이용약관</h2>
        <button type="button" class="btn_close">닫기</button>
        <div class="txt_wrap">
            <p>개인정보의 처리 목적<br>
                제1조 회사는 다음의 목적을 위하여 이용자의 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조, 정보통신망법 제22조 등에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br>
                가. 회원가입, 본인식별·인증, 회원자격 유지·관리, 본인확인, 서비스부정이용방지, 법정대리인의 동의여부<br>
                나. 상담, 콘텐츠·서비스 제공, 계약서·청구서 발송 등<br>
                다. 대금결제·정산, 채권추심 등<br>
                라. 고충처리를 위한 신원확인, 고충사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등<br>
                개인정보의 수집 및 이용 목적<br>
                제2조 회사는 이용자에게 최적화된 서비스를 원활하게 제공하기 위하여 다음의 개인정보 항목을 필수적으로 수집하고 이용합니다.<br>
                <br>
                가. 수집항목<br>
                성명, 주소, 전화번호(휴대폰번호, 팩스번호 포함), 회원아이디(ID), 전자우편주소(E-mail), 결제정보<br>
                나. 수집방법<br>
                홈페이지, 서면양식, 전화/팩스를 통한 회원가입, 문의 이메일, 경품 행사 응모<br>
                제3조 회사는 신규 또는 특정 서비스 개발 및 제공을 위하여 제2조의 필수수집항목 외의 추가적인 정보를 이용자의 자발적인 참여와 동의를 받아서 수집할 수 있습니다.<br>
                <br>
                제4조 회사는 이용자의 별도의 동의가 없는 한 수집한 개인정보를 제1 내지 3조의 목적과 용도 이외의 어떠한 목적으로도 이용하지 않습니다.<br>
                <br><br>
                개인정보의 보유 기간 및 파기<br><br>
                제5조 회사는 수집한 이용자의 개인정보를 해당 이용 목적을 달성한 후에는 지체 없이 파기하는 것을 원칙으로 하나, 관계법령의 규정에 의하여 보존할 필요가 있는 경우에는 일정기간 보관한 후 파기합니다.<br>
                <br>
                가. 회원가입정보 : 회원 탈퇴 시까지. 단, 관계법령위반에 따른 수사·조사 등이 진행 중이거나 홈페이지 이용에 따른 채권·채무관계 잔존 시에는 해당 사유 종료 시까지<br>
                나. 재화 또는 서비스 제공 : 재화·서비스 공급완료, 요금결제, 정산완료 시까지.<br>
                다. 전자상거래 등에서의 소비자 보호에 관한 법률에 따른 표시·광고, 계약내용 및 이행 등 거래에 관한 기록<br>
                1) 표시·광고에 관한 기록 : 6개월<br>
                2) 계약 또는 청약철회 등에 관한 기록 : 5년<br>
                3) 대금결제 및 재화 등의 공급에 관한 기록 : 5년<br>
                4) 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년<br>
                라. 통신비밀보호법 시행령 제41조에 따른 통신사실확인자료(사이트 이용 및 방문기록, 접속로그, 접속IP) : 3개월<br><br>
                제6조 회사는 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기하고, 전자파일형태로 저장된 개인정보는 기록을 복구 및 재생이 불가능한 기술적 방법을 사용하여 안전하게 삭제합니다. 또한 관계법령에서 보존의무를 부과한 개인정보에 대하여도 해당 기간이 경과한 후 지체 없이 이와 같이 재생 불가능한 방법으로 파기합니다.<br><br>

                제7조 회사는 1년간 서비스를 이용하지 않은 이용자에게 사전통지하고 개인정보를 파기<br>

            </p>
        </div>
    </div> 			<a href="index.php#" class="btn_top"></a>    </div>
<script>
    (function() {
        //애니메이션
        animateMaincom();

        // 메인 company 스크롤 애니메이션

        // 메인com 위치를 resize마다 계속 갱신
        function animateMaincom() {

            var posY = 0;
            var mainCon = $('.con1');
            /* 반응형에서는 섹션들의 높이가 가변이므로 요소의 위치를 resize에서 갱신을 시켜야한다 */
            $(window).resize(function() {
                posY = $('.con1').offset().top;
                posY2 = $('.con2').offset().top;
                posY3 = $('.con3').offset().top;
                posY4 = $('.con4').offset().top;

            }).trigger('resize');
            $(window).scroll(function() {
                var sc = $(this).scrollTop();

                if(sc >= posY - 600) {
                    $('.con1').addClass('on');
                } else if(sc === 0) {
                    $('.con1').removeClass('on');
                }

                if(sc >= posY2 - 700) {
                    $('.con2').addClass('on');
                } else if(sc === 0) {
                    $('.con2').removeClass('on');
                }

                if(sc >= posY3 - 900) {
                    $('.con3').addClass('on');
                } else if(sc === 0) {
                    $('.con3').removeClass('on');
                }
                if(sc >= posY4 - 700) {
                    $('.con4').addClass('on');
                } else if(sc === 0) {
                    $('.con4').removeClass('on');
                }
            }).trigger('scroll');
        }
    })();
</script>
<script>
    (function() {
        console.log(jQuery.browser.mobile);
        if(jQuery.browser.mobile == true){
            $('.con1').addClass('on');
            $('.con2').addClass('on');
            $('.con3').addClass('on');
            $('.con4').addClass('on');
        } else {

        }
    })();
</script>
<script src="./assets/main.js"></script>


</body><whale-quicksearch translate="no"><template shadowrootmode="closed"><style></style><div class="quicksearch mac"></div></template></whale-quicksearch></html>