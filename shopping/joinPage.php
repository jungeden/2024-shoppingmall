<?php
session_start();

$policy1 = $_POST['policy1'];
$policy2 = $_POST['policy2'];

if ($policy1=='n' || $policy2=='n') {
    echo ("<script>
        window.alert('약관에 동의해주세요.');
        history.go(-1);
    </script>");
    exit;
}

$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
$comment = isset($_GET['comment']) ? $_GET['comment'] : '';
$comment2 = isset($_GET['comment2']) ? $_GET['comment2'] : '';
$userpasswd = isset($_GET['userpasswd']) ? $_GET['userpasswd'] : '';
$userpasswdcheck = isset($_GET['userpasswdcheck']) ? $_GET['userpasswdcheck'] : '';
$username = isset($_GET['username']) ? $_GET['username'] : '';
$userphone = isset($_GET['userphone']) ? $_GET['userphone'] : '';
$useremail = isset($_GET['useremail']) ? $_GET['useremail'] : '';



echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      @import url(bottom.css);
      @import url(shop.css);
        @import url(join.css);
        @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gowun+Batang:wght@400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Gasoek+One&family=Gowun+Batang&display=swap');
        
    </style>
</head>
<body>
    <div class='container'>
    <div class='top'>
            <div class='left top'>
                <a class='title'>
                    ZAUM
                </a>
            </div>
            <div class='center top'>
                <a href='startPage.php?userid=$userid' class='menu'> HOME</a>
                <a href='shoppingPage.php?userid=$userid' class='menu'> SHOPPING</a>
                <a href='aboutPage.php?userid=$userid' class='menu'> ABOUT</a>
            </div>
            <div class='right top'>
                <div class='topbutton'>
                    <a href='shoppingcartPage.php'>
                        <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path class='icon' d='M286.15-97.69q-29.15 0-49.57-20.43-20.42-20.42-20.42-49.57 0-29.16 20.42-49.58 20.42-20.42 49.57-20.42 29.16 0 49.58 20.42 20.42 20.42 20.42 49.58 0 29.15-20.42 49.57-20.42 20.43-49.58 20.43Zm387.7 0q-29.16 0-49.58-20.43-20.42-20.42-20.42-49.57 0-29.16 20.42-49.58 20.42-20.42 49.58-20.42 29.15 0 49.57 20.42t20.42 49.58q0 29.15-20.42 49.57Q703-97.69 673.85-97.69ZM240.61-730 342-517.69h272.69q3.46 0 6.16-1.73 2.69-1.73 4.61-4.81l107.31-195q2.31-4.23.38-7.5-1.92-3.27-6.54-3.27h-486Zm-28.76-60h555.38q24.54 0 37.11 20.89 12.58 20.88 1.2 42.65L677.38-494.31q-9.84 17.31-26.03 26.96-16.2 9.66-35.5 9.66H324l-46.31 84.61q-3.08 4.62-.19 10 2.88 5.39 8.65 5.39h457.69v60H286.15q-40 0-60.11-34.5-20.12-34.5-1.42-68.89l57.07-102.61L136.16-810H60v-60h113.85l38 80ZM342-517.69h280-280Z'/></svg>

                            <!-- <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path id='shoppingcart' d='M292.31-115.38q-25.31 0-42.66-17.35-17.34-17.35-17.34-42.65 0-25.31 17.34-42.66 17.35-17.34 42.66-17.34 25.31 0 42.65 17.34 17.35 17.35 17.35 42.66 0 25.3-17.35 42.65-17.34 17.35-42.65 17.35Zm375.38 0q-25.31 0-42.65-17.35-17.35-17.35-17.35-42.65 0-25.31 17.35-42.66 17.34-17.34 42.65-17.34t42.66 17.34q17.34 17.35 17.34 42.66 0 25.3-17.34 42.65-17.35 17.35-42.66 17.35ZM235.23-740 342-515.38h265.38q6.93 0 12.31-3.47 5.39-3.46 9.23-9.61l104.62-190q4.61-8.46.77-15-3.85-6.54-13.08-6.54h-486Zm-19.54-40h520.77q26.08 0 39.23 21.27 13.16 21.27 1.39 43.81l-114.31 208.3q-8.69 14.62-22.58 22.93-13.88 8.31-30.5 8.31H324l-48.62 89.23q-6.15 9.23-.38 20 5.77 10.77 17.31 10.77h435.38v40H292.31q-35 0-52.23-29.5-17.23-29.5-.85-59.27l60.15-107.23L152.31-820H80v-40h97.69l38 80ZM342-515.38h280-280Z'/></svg> -->
                        </a>
                    <a href='searchPage.php?userid=$userid.php'>
                        <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path class='icon' d='M781.69-136.92 530.46-388.16q-30 24.77-69 38.77-39 14-80.69 14-102.55 0-173.58-71.01-71.03-71.01-71.03-173.54 0-102.52 71.01-173.6 71.01-71.07 173.54-71.07 102.52 0 173.6 71.03 71.07 71.03 71.07 173.58 0 42.85-14.38 81.85-14.39 39-38.39 67.84l251.23 251.23-42.15 42.16ZM380.77-395.38q77.31 0 130.96-53.66 53.66-53.65 53.66-130.96t-53.66-130.96q-53.65-53.66-130.96-53.66t-130.96 53.66Q196.15-657.31 196.15-580t53.66 130.96q53.65 53.66 130.96 53.66Z'/></svg>
                        <!-- <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path id='search'  d='M779.38-153.85 528.92-404.31q-30 25.54-69 39.54t-78.38 14q-96.1 0-162.67-66.53-66.56-66.53-66.56-162.57 0-96.05 66.53-162.71 66.53-66.65 162.57-66.65 96.05 0 162.71 66.56Q610.77-676.1 610.77-580q0 41.69-14.77 80.69t-38.77 66.69l250.46 250.47-28.31 28.3ZM381.54-390.77q79.61 0 134.42-54.81 54.81-54.8 54.81-134.42 0-79.62-54.81-134.42-54.81-54.81-134.42-54.81-79.62 0-134.42 54.81-54.81 54.8-54.81 134.42 0 79.62 54.81 134.42 54.8 54.81 134.42 54.81Z'/></svg> -->
                    </a>
                    <a href='myPage.php?userid=$userid'>
                        <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path class='icon' d='M240.92-268.31q51-37.84 111.12-59.77Q412.15-350 480-350t127.96 21.92q60.12 21.93 111.12 59.77 37.3-41 59.11-94.92Q800-417.15 800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 62.85 21.81 116.77 21.81 53.92 59.11 94.92ZM480.01-450q-54.78 0-92.39-37.6Q350-525.21 350-579.99t37.6-92.39Q425.21-710 479.99-710t92.39 37.6Q610-634.79 610-580.01t-37.6 92.39Q534.79-450 480.01-450ZM480-100q-79.15 0-148.5-29.77t-120.65-81.08q-51.31-51.3-81.08-120.65Q100-400.85 100-480t29.77-148.5q29.77-69.35 81.08-120.65 51.3-51.31 120.65-81.08Q400.85-860 480-860t148.5 29.77q69.35 29.77 120.65 81.08 51.31 51.3 81.08 120.65Q860-559.15 860-480t-29.77 148.5q-29.77 69.35-81.08 120.65-51.3 51.31-120.65 81.08Q559.15-100 480-100Zm0-60q54.15 0 104.42-17.42 50.27-17.43 89.27-48.73-39-30.16-88.11-47Q536.46-290 480-290t-105.77 16.65q-49.31 16.66-87.92 47.2 39 31.3 89.27 48.73Q425.85-160 480-160Zm0-350q29.85 0 49.92-20.08Q550-550.15 550-580t-20.08-49.92Q509.85-650 480-650t-49.92 20.08Q410-609.85 410-580t20.08 49.92Q450.15-510 480-510Zm0-70Zm0 355Z'/></svg>
                        <!-- <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#181818'><path id='my'  d='M247.85-260.62q51-36.69 108.23-58.03Q413.31-340 480-340t123.92 21.35q57.23 21.34 108.23 58.03 39.62-41 63.73-96.84Q800-413.31 800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 66.69 24.12 122.54 24.11 55.84 63.73 96.84ZM480.02-460q-50.56 0-85.29-34.71Q360-529.42 360-579.98q0-50.56 34.71-85.29Q429.42-700 479.98-700q50.56 0 85.29 34.71Q600-630.58 600-580.02q0 50.56-34.71 85.29Q530.58-460 480.02-460ZM480-120q-75.31 0-141-28.04t-114.31-76.65Q176.08-273.31 148.04-339 120-404.69 120-480t28.04-141q28.04-65.69 76.65-114.31 48.62-48.61 114.31-76.65Q404.69-840 480-840t141 28.04q65.69 28.04 114.31 76.65 48.61 48.62 76.65 114.31Q840-555.31 840-480t-28.04 141q-28.04 65.69-76.65 114.31-48.62 48.61-114.31 76.65Q555.31-120 480-120Zm0-40q55.31 0 108.85-19.35 53.53-19.34 92.53-52.96-39-31.31-90.23-49.5Q539.92-300 480-300q-59.92 0-111.54 17.81-51.61 17.81-89.84 49.88 39 33.62 92.53 52.96Q424.69-160 480-160Zm0-340q33.69 0 56.85-23.15Q560-546.31 560-580t-23.15-56.85Q513.69-660 480-660t-56.85 23.15Q400-613.69 400-580t23.15 56.85Q446.31-500 480-500Zm0-80Zm0 350Z'/></svg> -->
                    </a>
                </div>
            </div>
        </div>
        <div class='line'></div>
        <div class='middle join'>
            <div class = 'inputbox'>
                <div>
                    <a class='ajoin'>아이디</a>
                    <a class='comment'>$comment</a>
                </div>
                <form method='post' action='checkId.php'>
                    <div class='inputid'>
                        <input class='input id' type='text' name='userid' placeholder='아이디 입력 (6-20자)' value='$userid'>
                        <input class='button check'  type='submit' value='중복확인'>
                    </div>
                </form>
                <form method='post' action='join.php?userid=$userid' id="joinForm" name='joinform'>
                    <div class='inputelement'>
                    <a class='ajoin'>비밀번호</a>
                        <input class='input element' type='password' name='userpasswd' placeholder='비밀번호 입력' value='$userpasswd'>
                            <div>
                                <a class='ajoin'>비밀번호 확인</a>
                                <a class='commentpasswd'>$comment2</a>
                            </div>
                        <input class='input element' type='password' name='userpasswdcheck' placeholder='비밀번호 확인' value='$userpasswdcheck'>
                        <a class='ajoin'>이름</a>
                        <input class='input element' type='text' name='username' placeholder='이름 입력' value='$username'>
                        <a class='ajoin'>전화번호</a>
                        <input class='input element' type='text' name='userphone' placeholder='전화번호 입력 (-제외 11자리 입력)' value='$userphone'>
                        <a class='ajoin'>이메일</a>
                        <input class='input element' type='text' name='useremail' placeholder='이메일 주소' value='$useremail'>
                        <a class='ajoin'>생년월일</a>
                        <input type="hidden" name="userbirth" id="userbirth" >
                    </div>
                    <div class='inputbirth'>
                        <button class='birthday year' type='button' name='userbirthYear' id='userBirthYearJoin' onclick="showOption('year')">년</button>
                        <ul class='birthdayBoxOption hide' id='Year'>
                            <li><button type='button' class=' option' id='2010' onclick="changeBirth('Year', this.id)">2010</button></li>
                            <li><button type='button' class=' option' id='2009' onclick="changeBirth('Year', this.id)">2009</button></li>
                            <li><button type='button' class=' option' id='2008' onclick="changeBirth('Year', this.id)">2008</button></li>
                            <li><button type='button' class=' option' id='2007' onclick="changeBirth('Year', this.id)">2007</button></li>
                            <li><button type='button' class=' option' id='2006' onclick="changeBirth('Year', this.id)">2006</button></li>
                            <li><button type='button' class=' option' id='2005' onclick="changeBirth('Year', this.id)">2005</button></li>
                            <li><button type='button' class=' option' id='2004' onclick="changeBirth('Year', this.id)">2004</button></li>
                            <li><button type='button' class=' option' id='2003' onclick="changeBirth('Year', this.id)">2003</button></li>
                            <li><button type='button' class=' option' id='2002' onclick="changeBirth('Year', this.id)">2002</button></li>
                            <li><button type='button' class=' option' id='2001' onclick="changeBirth('Year', this.id)">2001</button></li>
                            <li><button type='button' class=' option' id='2000' onclick="changeBirth('Year', this.id)">2000</button></li>

                            <li><button type='button' class=' option' id='1999' onclick="changeBirth('Year', this.id)">1999</button></li>
                            <li><button type='button' class=' option' id='1998' onclick="changeBirth('Year', this.id)">1998</button></li>
                            <li><button type='button' class=' option' id='1997' onclick="changeBirth('Year', this.id)">1997</button></li>
                            <li><button type='button' class=' option' id='1996' onclick="changeBirth('Year', this.id)">1996</button></li>
                            <li><button type='button' class=' option' id='1995' onclick="changeBirth('Year', this.id)">1995</button></li>
                            <li><button type='button' class=' option' id='1994' onclick="changeBirth('Year', this.id)">1994</button></li>
                            <li><button type='button' class=' option' id='1993' onclick="changeBirth('Year', this.id)">1993</button></li>
                            <li><button type='button' class=' option' id='1992' onclick="changeBirth('Year', this.id)">1992</button></li>
                            <li><button type='button' class=' option' id='1991' onclick="changeBirth('Year', this.id)">1991</button></li>
                            <li><button type='button' class=' option' id='1990' onclick="changeBirth('Year', this.id)">1990</button></li>

                            <li><button type='button' class=' option' id='1989' onclick="changeBirth('Year', this.id)">1989</button></li>
                            <li><button type='button' class=' option' id='1988' onclick="changeBirth('Year', this.id)">1988</button></li>
                            <li><button type='button' class=' option' id='1987' onclick="changeBirth('Year', this.id)">1987</button></li>
                            <li><button type='button' class=' option' id='1986' onclick="changeBirth('Year', this.id)">1986</button></li>
                            <li><button type='button' class=' option' id='1985' onclick="changeBirth('Year', this.id)">1985</button></li>
                            <li><button type='button' class=' option' id='1984' onclick="changeBirth('Year', this.id)">1984</button></li>
                            <li><button type='button' class=' option' id='1983' onclick="changeBirth('Year', this.id)">1983</button></li>
                            <li><button type='button' class=' option' id='1982' onclick="changeBirth('Year', this.id)">1982</button></li>
                            <li><button type='button' class=' option' id='1981' onclick="changeBirth('Year', this.id)">1981</button></li>
                            <li><button type='button' class=' option' id='1980' onclick="changeBirth('Year', this.id)">1980</button></li>

                            <li><button type='button' class=' option' id='1979' onclick="changeBirth('Year', this.id)">1979</button></li>
                            <li><button type='button' class=' option' id='1978' onclick="changeBirth('Year', this.id)">1978</button></li>
                            <li><button type='button' class=' option' id='1977' onclick="changeBirth('Year', this.id)">1977</button></li>
                            <li><button type='button' class=' option' id='1976' onclick="changeBirth('Year', this.id)">1976</button></li>
                            <li><button type='button' class=' option' id='1975' onclick="changeBirth('Year', this.id)">1975</button></li>
                            <li><button type='button' class=' option' id='1974' onclick="changeBirth('Year', this.id)">1974</button></li>
                            <li><button type='button' class=' option' id='1973' onclick="changeBirth('Year', this.id)">1973</button></li>
                            <li><button type='button' class=' option' id='1972' onclick="changeBirth('Year', this.id)">1972</button></li>
                            <li><button type='button' class=' option' id='1971' onclick="changeBirth('Year', this.id)">1971</button></li>
                            <li><button type='button' class=' option' id='1970' onclick="changeBirth('Year', this.id)">1970</button></li>

                            <li><button type='button' class=' option' id='1969' onclick="changeBirth('Year', this.id)">1969</button></li>
                            <li><button type='button' class=' option' id='1968' onclick="changeBirth('Year', this.id)">1968</button></li>
                            <li><button type='button' class=' option' id='1967' onclick="changeBirth('Year', this.id)">1967</button></li>
                            <li><button type='button' class=' option' id='1966' onclick="changeBirth('Year', this.id)">1966</button></li>
                            <li><button type='button' class=' option' id='1965' onclick="changeBirth('Year', this.id)">1965</button></li>
                            <li><button type='button' class=' option' id='1964' onclick="changeBirth('Year', this.id)">1964</button></li>
                            <li><button type='button' class=' option' id='1963' onclick="changeBirth('Year', this.id)">1963</button></li>
                            <li><button type='button' class=' option' id='1962' onclick="changeBirth('Year', this.id)">1962</button></li>
                            <li><button type='button' class=' option' id='1961' onclick="changeBirth('Year', this.id)">1961</button></li>
                            <li><button type='button' class=' option' id='1960' onclick="changeBirth('Year', this.id)">1960</button></li>

                            <li><button type='button' class=' option' id='1959' onclick="changeBirth('Year', this.id)">1959</button></li>
                            <li><button type='button' class=' option' id='1958' onclick="changeBirth('Year', this.id)">1958</button></li>
                            <li><button type='button' class=' option' id='1957' onclick="changeBirth('Year', this.id)">1957</button></li>
                            <li><button type='button' class=' option' id='1956' onclick="changeBirth('Year', this.id)">1956</button></li>
                            <li><button type='button' class=' option' id='1955' onclick="changeBirth('Year', this.id)">1955</button></li>
                            <li><button type='button' class=' option' id='1954' onclick="changeBirth('Year', this.id)">1954</button></li>
                            <li><button type='button' class=' option' id='1953' onclick="changeBirth('Year', this.id)">1953</button></li>
                            <li><button type='button' class=' option' id='1952' onclick="changeBirth('Year', this.id)">1952</button></li>
                            <li><button type='button' class=' option' id='1951' onclick="changeBirth('Year', this.id)">1951</button></li>
                            <li><button type='button' class=' option' id='1950' onclick="changeBirth('Year', this.id)">1950</button></li>

                            <li><button type='button' class=' option' id='1949' onclick="changeBirth('Year', this.id)">1949</button></li>
                            <li><button type='button' class=' option' id='1948' onclick="changeBirth('Year', this.id)">1948</button></li>
                            <li><button type='button' class=' option' id='1947' onclick="changeBirth('Year', this.id)">1947</button></li>
                            <li><button type='button' class=' option' id='1946' onclick="changeBirth('Year', this.id)">1946</button></li>
                            <li><button type='button' class=' option' id='1945' onclick="changeBirth('Year', this.id)">1945</button></li>
                            <li><button type='button' class=' option' id='1944' onclick="changeBirth('Year', this.id)">1944</button></li>
                            <li><button type='button' class=' option' id='1943' onclick="changeBirth('Year', this.id)">1943</button></li>
                            <li><button type='button' class=' option' id='1942' onclick="changeBirth('Year', this.id)">1942</button></li>
                            <li><button type='button' class=' option' id='1941' onclick="changeBirth('Year', this.id)">1941</button></li>
                            <li><button type='button' class=' option' id='1940' onclick="changeBirth('Year', this.id)">1940</button></li>
                        </ul>
                        <button class='birthday month' type='button' name='userbirthMonth' id='userBirthMonthJoin' onclick="showOption('month')">월</button>
                        <ul class='birthdayBoxOption month hide' id='Month'>
                            <li><button type='button' class=' option' id='01' onclick="changeBirth('Month', this.id)">01</button></li>
                            <li><button type='button' class=' option' id='02' onclick="changeBirth('Month', this.id)">02</button></li>
                            <li><button type='button' class=' option' id='03' onclick="changeBirth('Month', this.id)">03</button></li>
                            <li><button type='button' class=' option' id='04' onclick="changeBirth('Month', this.id)">04</button></li>
                            <li><button type='button' class=' option' id='05' onclick="changeBirth('Month', this.id)">05</button></li>
                            <li><button type='button' class=' option' id='06' onclick="changeBirth('Month', this.id)">06</button></li>
                            <li><button type='button' class=' option' id='07' onclick="changeBirth('Month', this.id)">07</button></li>
                            <li><button type='button' class=' option' id='08' onclick="changeBirth('Month', this.id)">08</button></li>
                            <li><button type='button' class=' option' id='09' onclick="changeBirth('Month', this.id)">09</button></li>
                            <li><button type='button' class=' option' id='10' onclick="changeBirth('Month', this.id)">10</button></li>
                            <li><button type='button' class=' option' id='11' onclick="changeBirth('Month', this.id)">11</button></li>
                            <li><button type='button' class=' option' id='12' onclick="changeBirth('Month', this.id)">12</button></li>

                        </ul>
                        <input class='input element birth' type='text' name='userbirthday' placeholder='일' id="userbirthDateJoin">
                    </div>
                    <div>
                        <a class='ajoin'>주소</a>
                    </div>
                    <div class='inputaddress1'>
                        <input class='input zip' type='text' name='zipcode' placeholder='우편번호 찾기' >
                        <!-- <button class='button check zipcode' type='button' onclick="javascript:window.open('findzipcodePage.php?page=join','findzipcode','width=500,height=150')"> -->
                        <button class='button check zipcode' type='button' onclick="openPopup()">
                        <!-- <button class='button check zipcode' type='button' onclick="window.open('findzipcodePage.php?page=join', 'findzipcode', 'width=400,height=400,location=no,status=no,scrollbars=yes,resizable=no');"> -->
                            &nbsp;&nbsp;&nbsp;&nbsp;우편번호
                        </button>
                    </div>
                    <div class='inputaddress'>
                        <input class='input element addr' name='address1' placeholder='주소'>
                        <input class='input element addr' name='address2' type='text' placeholder='상세주소'>
                    </div>
                </form>
            </div>
        </div>
        <div class='bottom join'>
            <div class="button loginbutton" onclick="birth();">
                <span class="tooltip loginbutton">JOIN</span>
            </div>
        </div>
    </div>
    <script>
        function changeBirth(type, value) {
            let birthButton = document.getElementById(`userBirth\${type}Join`);
            birthButton.textContent = value;
            birthButton.style.color = "rgb(28, 28, 28)"; 
            document.getElementById(`userBirth\${type}Join`).value = value;

            let elements = document.getElementsByClassName("birthdayBoxOption");
            for (let i = 0; i < elements.length; i++) {
                elements[i].style.visibility = "hidden";
            }
        }
        function birth() {
            let year = document.getElementById('userBirthYearJoin').value;
            let month = document.getElementById('userBirthMonthJoin').value;
            let date = document.getElementById('userbirthDateJoin').value;

            let fullBirthDate = year + month.padStart(2, '0') + date.padStart(2, '0');
            document.getElementById('userbirth').value = fullBirthDate;
            document.getElementById('joinForm').submit();
        }

        function showOption(type) {
            const ids = {
                year: "Year",
                month: "Month"
            };
            document.getElementById(ids.year).style.visibility = (type === 'year') ? "visible" : "hidden";
            document.getElementById(ids.month).style.visibility = (type === 'month') ? "visible" : "hidden";
        }
        function openPopup() {
            const width = 400;
            const height = 400;
            const left = (window.screen.width - width) / 2;
            const top = (window.screen.height - height) / 2;

            window.open(
            'findzipcodePage.php?page=join', 
            'findzipcode', 
            'width=400,height=400,left=100,top=100,resizable=no,scrollbars=yes'
            );
        }
    </script>
</body>
</html>
HTML;

?>
