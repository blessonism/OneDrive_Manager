<?php

global $exts;
global $constStr;

$exts['img'] = ['ico', 'bmp', 'gif', 'jpg', 'jpeg', 'jpe', 'jfif', 'tif', 'tiff', 'png', 'heic', 'webp'];
$exts['music'] = ['mp3', 'wma', 'flac', 'ape', 'wav', 'ogg', 'm4a'];
$exts['office'] = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];
$exts['txt'] = ['txt', 'bat', 'sh', 'php', 'asp', 'js', 'css', 'json', 'html', 'c', 'cpp', 'md', 'py', 'omf'];
$exts['video'] = ['mp4', 'webm', 'mkv', 'mov', 'flv', 'blv', 'avi', 'wmv', 'm3u8', 'rm', 'rmvb'];
$exts['zip'] = ['zip', 'rar', '7z', 'gz', 'tar'];

$constStr = [
    'languages' => [
        'en-us' => 'English',
        'zh-cn' => '简体中文',
        'ja' => '日本語',
        'ko-kr' => '한국어',
        'fa' => 'فارسی',
    ],
    'Week' => [
        'en-us' => [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
        ],
        'zh-cn' => [
            0 => '星期日',
            1 => '星期一',
            2 => '星期二',
            3 => '星期三',
            4 => '星期四',
            5 => '星期五',
            6 => '星期六',
        ],
        'ja' => [
            0 => '日曜日',
            1 => '月曜日',
            2 => '火曜日',
            3 => '水曜日',
            4 => '木曜日',
            5 => '金曜日',
            6 => '土曜日',
        ],
        'ko-kr' => [
            0 => '일요일',
            1 => '월요일',
            2 => '화요일',
            3 => '수요일',
            4 => '목요일',
            5 => '금요일',
            6 => '토요일',
        ],
        'fa' => [
            0 => 'یکشنبه',
            1 => 'دوشنبه',
            2 => 'سه شنبه',
            3 => 'چهارشنبه',
            4 => 'پنج شنبه',
            5 => 'جمعه',
            6 => 'شنبه',
        ],
    ],
    'EnvironmentsDescription' => [
        'en-us' => [
            'admin' => 'The admin password, Login button will not show when empty',
            'adminloginpage' => 'if set, the Login button will not display, and the login page no longer \'?admin\', it is \'?{this value}\'.',
            'customScript' => '<script> in all pages, e.g. http turn to https',
            'customCss' => '<style> in <head>',
            'customTheme' => 'an url of html',
            'domain_path' => 'more custom domain, format is a1.com:/dirto/path1|b2.com:/path2',
            'diskname' => 'The disk name you want show.',
            'disktag' => 'A tag used in store config and url.',
            'disableShowThumb' => 'if 1, the ShowThumbnail button will not display',
            'disableChangeTheme' => 'if 1, the Theme selection button will not display',
            'downloadencrypt' => '0 or 1. if 1, the files in encrypt folder can be downloaded without password',
            'background' => 'Set an url as background photo.',
            'theme' => 'Select theme.',
            'timezone' => 'Set default timezone.',
            'guestup_path' => 'Set guest upload dir, before set this, the files in this dir will show as normal.',
            'hideFunctionalityFile' => '0 or 1. if 1, some file will not show in list to guest, like readme.md',
            'passfile' => 'The password of folder(& its childrens) will save in this file.',
            'domainforproxy' => 'Will replace the https://xxxxx-my.sharepoint.com with this value.Add &Origindomain=xxxxx-my.sharepoint.com at last',
            'public_path' => 'Show this Onedrive dir when through the long url of API Gateway; public show files less than private.',
            'sitename' => 'sitename',
            'Onedrive_ver' => 'Onedrive version',
        ],
        'zh-cn' => [
            'admin' => '管理密码，不添加时不显示登录页面且无法登录。',
            'adminloginpage' => '如果设置，登录按钮及页面隐藏。管理登录的页面不再是\'?admin\'，而是\'?此设置的值\'。',
            'customScript' => '<script>，在所有页都会存在,例如放一个http跳转https',
            'customCss' => '<style>，在<head>最后面',
            'customTheme' => 'html格式的主题的url',
            'domain_path' => '使用多个自定义域名时，指定每个域名看到的目录。格式为a1.com:/dirto/path1|b1.com:/path2，比private_path优先。',
            'diskname' => '这个盘你想显示什么名称。',
            'disktag' => '一个标签，用于保存配置，多盘时会显示在url中。',
            'disableShowThumb' => '如果填 1, ‘显示缩略’按钮将被隐藏。',
            'disableChangeTheme' => '如果填 1, 主题选择切换将被隐藏',
            'downloadencrypt' => '0 或 1。如果 1, 那加密目录内的文件可以不需要密码就能下载。',
            'background' => '设置一个url作为背景。',
            'theme' => '选择一个主题。',
            'timezone' => '设置默认时区。',
            'guestup_path' => '设置游客上传路径（图床路径），不设置这个值时该目录内容会正常列文件出来，设置后只有上传界面，不显示其中文件（登录后显示）。',
            'hideFunctionalityFile' => '0 或 1。如果 1, 某些文件不列表给游客看，但它的功能正常，比如readme.md',
            'passfile' => '自定义密码文件的名字，可以是\'pppppp\'，也可以是\'aaaa.txt\'等等；列目录时不会显示，只有知道密码才能查看或下载此文件。密码是这个文件的内容，可以空格、可以中文；',
            'domainforproxy' => '会将https://xxxxx-my.sharepoint.com替换成这个值，在目标需要自己设置反代。会加上&Origindomain=原域名',
            'public_path' => '使用API长链接访问时，显示网盘文件的路径，不设置时默认为根目录；不能是private_path的上级（public看到的不能比private多，要么看到的就不一样）。',
            'sitename' => '网站的名称',
            'Onedrive_ver' => 'Onedrive版本',
        ],
        'ja' => [
            'admin' => 'パスワードを管理する、追加しない場合、ログインページは表示されず、ログインできません。',
            'adminloginpage' => '設定すると、ログインボタンとページが非表示になります。ログインを管理するためのページは\'?admin \'ではなく、\'?この設定の値\'。',
            'domain_path' => '複数のカスタムドメイン名を使用する場合、各ドメイン名に表示されるディレクトリを指定します。形式はa1.com:/dirto/path1|b1.com:/path2で、private_pathよりも優先されます。',
            'diskname' => '',
            'disktag' => '',
            'downloadencrypt' => '',
            'background' => '',
            'guestup_path' => 'マップベッドのパスを設定します。この値が設定されていない場合、ディレクトリの内容は通常ファイルにリストされ、設定後はアップロードインターフェイスのみが表示されます。',
            'passfile' => 'カスタムパスワードファイルの名前は、\'pppppp \'、\'aaaa.txt \'などの場合があります。ディレクトリをリストするときには表示されません。パスワードを知っている場合にのみ、このファイルを表示またはダウンロードできます。 パスワードはこのファイルの内容であり、スペースまたは漢字を使用できます。',
            'public_path' => 'APIのロングリンクアクセスを使用する場合、ネットワークディスクファイルのパスが表示されますが、設定されていない場合はデフォルトでルートディレクトリになり、private_pathの上位にはなりません（publicはprivate以上のものを見ることができません。それ以外は異なります。）。',
            'sitename' => 'ウェブサイト名',
            'Onedrive_ver' => 'Onedriveバージョン',
        ],
        'ko-kr' => [
            'admin' => '비밀번호를 관리하고 로그인 페이지를 표시하지 않으며 추가하지 않으면 로그인 할 수 없습니다.',
            'adminloginpage' => '설정하면 로그인 버튼과 페이지가 숨겨집니다. 로그인 관리 페이지는 더 이상 \ ?Admin\'이 아니라 \ ?이 설정의 값 \'입니다.',
            'domain_path' => '여러 개의 사용자 정의 도메인 이름을 사용하는 경우 각 도메인 이름에 표시되는 디렉토리를 지정하십시오. 형식은 a1.com:/dirto/path1|b1.com:/path2이며 private_path보다 우선합니다.',
            'diskname' => '이 디스크에 어떤 이름을 표시 하시겠습니까?',
            'disktag' => '레이블은 구성을 저장하는 데 사용되며 디스크가 여러 개인 경우 URL에 표시됩니다.',
            'downloadencrypt' => '',
            'background' => 'URL을 배경으로 설정하거나 표시하는.',
            'guestup_path' => '방문자의 업로드 경로 (맵 베드 경로)를 설정합니다.이 값을 설정하지 않으면 디렉토리의 내용이 파일로 표시되고 설정 후에는 업로드 인터페이스 만 표시되고 파일은 표시되지 않습니다 (로그인 후 표시).',
            'passfile' => '사용자 정의 비밀번호 파일의 이름은 \'pppppp\' \'aaaa.txt \'등이 될 수 있으며 디렉토리가 나열되어 있으면 표시되지 않으며 비밀번호를 알고있는 경우에만이 파일을 보거나 다운로드 할 수 있습니다. 암호는이 파일의 내용이며 공백이거나 한국어 일 수 있습니다.',
            'public_path' => 'API 긴 링크 액세스를 사용하는 경우 네트워크 디스크 파일의 경로가 표시됩니다. 설정되지 않은 경우 기본적으로 루트 디렉토리로 설정됩니다.',
            'sitename' => '웹 사이트 이름',
            'Onedrive_ver' => 'Onedrive 버전',
        ],
        'fa' => [
            'admin' => 'رمز عبور ادمین، در صورت خالی بودن دکمه لاگین به نمایش در نمی‌آید',
            'adminloginpage' => 'در صورت تنظیم ، دکمه ورود نمایش داده نمی شود و صفحه ورود دیگر \?admin\ نیست بلکه \?{مقدار ورودی شما}\ است.',
            'domain_path' => 'تنظیم دامنه سفارشی، به صورت a1.com:/dirto/path1|b2.com:/path2',
            'diskname' => 'نام دیسک که می‌خواهید نشان دهید.',
            'disktag' => 'تگی که در ذخیره پیکربندی و نشانی اینترنتی استفاده می‌شود.',
            'downloadencrypt' => '',
            'background' => 'تنظیم عکس پشت زمینه به صورت url یا قرار دادن بک گراند به صورت دستی در مسیر نشان داده شده.',
            'guestup_path' => 'قبل از تنظیم این گزینه ، فایل آپلود guest را تنظیم کنید ، پرونده های موجود در این حالت به صورت عادی نشان داده می شوند.',
            'passfile' => 'رمز عبور dir در این فایل ذخیره می شود.',
            'public_path' => 'این مسیر Onedrive را هنگامی که از طریق آدرس طولانی API Gateway استفاده می کنید ، نشان دهید. فایل های نمایش عمومی کمتر از خصوصی.',
            'sitename' => 'نام سایت',
            'Onedrive_ver' => 'ورژن Onedrive',
        ],
    ],
    'SetSecretsFirst' => [
        'en-us' => 'Set API in Config first! or reinstall.',
        'zh-cn' => '先在环境变量设置API！或重装。',
        'ja' => '最初に環境変数にAPIを設定してください！',
        'ko-kr' => '먼저 환경 변수에서 API를 설정하십시오! 또는 다시 설치하십시오.',
        'fa' => 'ابتدا API را در پیکربندی تنظیم کنید! یا دوباره نصب کنید.',
    ],
    'RefreshtoLogin' => [
        'en-us' => '<font color="red">Refresh</font> and login.',
        'zh-cn' => '请<font color="red">刷新</font>页面后重新登录',
        'ja' => 'ページを<font color = "red">更新</font>して、再度ログインしてください',
        'ko-kr' => '페이지를 <font color = "red"> 새로 고침 </ font> 하시고 다시 로그인하십시오',
        'fa' => '<font color="red">رفرش</font> و لاگین.',
    ],
    'AdminLogin' => [
        'en-us' => 'Admin Login',
        'zh-cn' => '管理登录',
        'ja' => 'ログインを管理する',
        'ko-kr' => '로그인 관리',
        'fa' => 'ورود ادمین',
    ],
    'LoginSuccess' => [
        'en-us' => 'Login Success!',
        'zh-cn' => '登录成功，正在跳转',
        'ja' => 'ログイン成功、ジャンプ',
        'ko-kr' => '로그인 성공, 점프',
        'fa' => 'ورود با موفقیت انجام شد!',
    ],
    'InputPassword' => [
        'en-us' => 'Input Password',
        'zh-cn' => '输入密码',
        'ja' => 'パスワードを入力してください',
        'ko-kr' => '비밀번호 입력',
        'fa' => 'رمز عبور را وارد کنید',
    ],
    'Login' => [
        'en-us' => 'Login',
        'zh-cn' => '登录',
        'ja' => 'サインイン',
        'ko-kr' => '로그인',
        'fa' => 'ورود',
    ],
    'Encrypt' => [
        'en-us' => 'Encrypt',
        'zh-cn' => '加密',
        'ja' => '暗号化',
        'ko-kr' => '암호화',
        'fa' => 'رمزگذاری',
    ],
    'SetpassfileBfEncrypt' => [
        'en-us' => 'Set \'passfile\' in Environments before encrypt',
        'zh-cn' => '先在环境变量设置passfile才能加密',
        'ja' => '最初に暗号化する環境変数にパスファイルを設定します',
        'ko-kr' => '암호화하기 전에 환경 변수에 패스 파일을 설정하십시오',
        'fa' => 'قبل از رمزگذاری \"pass file \" را در محیط تنظیم کنید',
    ],
    'updateProgram' => [
        'en-us' => 'Update Program',
        'zh-cn' => '一键更新',
        'ja' => 'ワンクリック更新',
        'ko-kr' => '원 클릭 업데이트',
        'fa' => 'برنامه را به روز کنید',
    ],
    'UpdateSuccess' => [
        'en-us' => 'Program update Success!',
        'zh-cn' => '程序升级成功！',
        'ja' => 'プログラムのアップグレードに成功しました！',
        'ko-kr' => '프로그램 업그레이드 성공!',
        'fa' => 'موفقیت به روز رسانی برنامه!',
    ],
    'Setup' => [
        'en-us' => 'Setup',
        'zh-cn' => '设置',
        'ja' => '設定する',
        'ko-kr' => '설정',
        'fa' => 'نصب',
    ],
    'Back' => [
        'en-us' => 'Back',
        'zh-cn' => '返回',
        'ja' => 'back',
        'ko-kr' => '돌아 가기',
        'fa' => 'بازگشت',
    ],
    'Theme' => [
        'en-us' => 'Theme',
        'zh-cn' => '主题',
    ],
    'NotNeedUpdate' => [
        'en-us' => 'Not Need Update',
        'zh-cn' => '不需要更新',
        'ja' => '更新不要',
        'ko-kr' => '업데이트가 필요하지 않습니다',
        'fa' => 'آپدیت لازم نیست',
    ],
    'PlatformConfig' => [
        'en-us' => 'Platform Config',
        'zh-cn' => '平台变量',
        'ja' => 'プラットフォーム変数',
        'ko-kr' => '플랫폼 변수',
        'fa' => 'پیکربندی پلتفرم',
    ],
    'DelDisk' => [
        'en-us' => 'Del This Disk',
        'zh-cn' => '删除此盘',
        'ja' => 'このディスクを削除',
        'ko-kr' => '이 디스크를 삭제',
        'fa' => 'پاک کردن این دیسک',
    ],
    'AddDisk' => [
        'en-us' => 'Add Onedrive Disk',
        'zh-cn' => '添加Onedrive盘',
        'ja' => 'Onedriveを追加',
        'ko-kr' => 'Onedrive 추가',
        'fa' => 'اضافه کردن دیسک Onedrive',
    ],
    'Home' => [
        'en-us' => 'Home',
        'zh-cn' => '首页',
        'ja' => 'ホーム',
        'ko-kr' => '홈',
        'fa' => 'خانه',
    ],
    'Preview' => [
        'en-us' => 'Preview',
        'zh-cn' => '预览',
    ],
    'List' => [
        'en-us' => 'List',
        'zh-cn' => '列表',
    ],
    'NeedUpdate' => [
        'en-us' => 'Program can update<br>Click setup in Operate at top.',
        'zh-cn' => '可以升级程序<br>在上方管理菜单中<br>进入设置页面升级',
        'ja' => 'プログラムをアップグレードできます<br>上記の管理メニューで<br>アップグレードする設定ページに入ります',
        'ko-kr' => '프로그램을 업그레이드 할 수 있습니다. <br> 위의 관리 메뉴에서 <br> 업그레이드 할 설정 페이지를 입력하십시오.',
        'fa' => 'برنامه می تواند آپدیت شود<br>روی گزینه نصب در بالای صفحه کلیک کنید.',
    ],
    'Operate' => [
        'en-us' => 'Operate',
        'zh-cn' => '管理',
        'ja' => '管理',
        'ko-kr' => '관리',
        'fa' => 'مدیریت',
    ],
    'Logout' => [
        'en-us' => 'Logout',
        'zh-cn' => '登出',
        'ja' => 'ログアウトする',
        'ko-kr' => '로그 아웃',
        'fa' => 'خروج',
    ],
    'Create' => [
        'en-us' => 'Create',
        'zh-cn' => '新建',
        'ja' => '新しい',
        'ko-kr' => '새로운',
        'fa' => 'ایجاد کردن',
    ],
    'Download' => [
        'en-us' => 'download',
        'zh-cn' => '下载',
        'ja' => 'ダウンロードする',
        'ko-kr' => '다운로드',
        'fa' => 'دانلود',
    ],
    'ClicktoEdit' => [
        'en-us' => 'Click to edit',
        'zh-cn' => '点击后编辑',
        'ja' => 'クリック後に編集',
        'ko-kr' => '클릭 후 편집',
        'fa' => 'برای ویرایش کلیک کنید',
    ],
    'Save' => [
        'en-us' => 'Save',
        'zh-cn' => '保存',
        'ja' => '保存する',
        'ko-kr' => '저장',
        'fa' => 'ذخیره',
    ],
    'FileNotSupport' => [
        'en-us' => 'File not support preview.',
        'zh-cn' => '文件格式不支持预览',
        'ja' => 'ファイル形式はプレビューをサポートしていません',
        'ko-kr' => '파일 형식은 미리보기를 지원하지 않습니다',
        'fa' => 'پیش نمایش برای این فایل پشتیبانی نمی شود.',
    ],
    'File' => [
        'en-us' => 'File',
        'zh-cn' => '文件',
        'ja' => 'ファイル',
        'ko-kr' => '파일',
        'fa' => 'فایل',
    ],
    'ShowThumbnails' => [
        'en-us' => 'Thumbnails',
        'zh-cn' => '图片缩略',
        'ja' => '画像のサムネイル',
        'ko-kr' => '사진 섬네일',
        'fa' => 'تصویر بندانگشتی',
    ],
    'OriginalPic' => [
        'en-us' => 'OriginalPic',
        'zh-cn' => '原图',
    ],
    'CopyAllDownloadUrl' => [
        'en-us' => 'CopyAllDownloadUrl',
        'zh-cn' => '复制所有下载链接',
        'ja' => 'すべてのダウンロードリンクをコピー',
        'ko-kr' => '모든 다운로드 링크 복사',
        'fa' => 'کپی از تمام لینک ها',
    ],
    'Search' => [
        'en-us' => 'Search',
        'zh-cn' => '搜索',
    ],
    'EditTime' => [
        'en-us' => 'EditTime',
        'zh-cn' => '修改时间',
        'ja' => '変更時間',
        'ko-kr' => '수정 시간',
        'fa' => 'زمان ویرایش',
    ],
    'Size' => [
        'en-us' => 'Size',
        'zh-cn' => '大小',
        'ja' => 'サイズ ',
        'ko-kr' => '사이즈',
        'fa' => 'سایز',
    ],
    'Rename' => [
        'en-us' => 'Rename',
        'zh-cn' => '重命名',
        'ja' => '名前を変更',
        'ko-kr' => '이름 바꾸기',
        'fa' => 'تغییر نام',
    ],
    'Move' => [
        'en-us' => 'Move',
        'zh-cn' => '移动',
        'ja' => '移動する',
        'ko-kr' => '이동',
        'fa' => 'انتقال',
    ],
    'Copy' => [
        'en-us' => 'Copy',
        'zh-cn' => '复制',
        'ja' => 'コピー',
        'ko-kr' => '복사',
        'fa' => 'کپی',
    ],
    'CannotMove' => [
        'en-us' => 'Can not Move!',
        'zh-cn' => '不能移动！',
        'ja' => '動かない！',
        'ko-kr' => '움직일 수 없어!',
        'fa' => 'نمی‌تواند منتقل شود!',
    ],
    'Delete' => [
        'en-us' => 'Delete',
        'zh-cn' => '删除',
        'ja' => '削除する',
        'ko-kr' => '삭제',
        'fa' => 'حذف کردن',
    ],
    'PrePage' => [
        'en-us' => 'PrePage',
        'zh-cn' => '上一页',
        'ja' => '前へ',
        'ko-kr' => '이전',
        'fa' => 'صفحه قبل',
    ],
    'NextPage' => [
        'en-us' => 'NextPage',
        'zh-cn' => '下一页',
        'ja' => '次のページ',
        'ko-kr' => '다음 페이지',
        'fa' => 'صفحه بعد',
    ],
    'Upload' => [
        'en-us' => 'Upload',
        'zh-cn' => '上传',
        'ja' => 'アップロードする',
        'ko-kr' => '업로드',
        'fa' => 'آپلود',
    ],
    'UploadFile' => [
        'en-us' => 'Upload File(s)',
        'zh-cn' => '上传文件',
    ],
    'UploadFolder' => [
        'en-us' => 'Upload Folder',
        'zh-cn' => '上传文件夹',
    ],
    'FileSelected' => [
        'en-us' => 'Select File',
        'zh-cn' => '选择文件',
        'ja' => 'ファイルを選択',
        'ko-kr' => '파일 선택',
        'fa' => 'انتخاب فایل',
    ],
    'NoFileSelected' => [
        'en-us' => 'Not Select File',
        'zh-cn' => '没有选择文件',
        'ja' => 'ファイルが選択されていません',
        'ko-kr' => '선택된 파일이 없습니다',
        'fa' => 'فایل را انتخاب نکنید',
    ],
    'Submit' => [
        'en-us' => 'Submit',
        'zh-cn' => '确认',
        'ja' => '確認する',
        'ko-kr' => '확인',
        'fa' => 'ارسال',
    ],
    'Close' => [
        'en-us' => 'Close',
        'zh-cn' => '关闭',
        'ja' => '閉じる',
        'ko-kr' => '닫기',
        'fa' => 'بستن',
    ],
    'InputPasswordUWant' => [
        'en-us' => 'Input Password you Want',
        'zh-cn' => '输入想要设置的密码',
        'ja' => '設定するパスワードを入力してください',
        'ko-kr' => '설정하려는 비밀번호를 입력하십시오',
        'fa' => 'پسورد خود را وارد کنید',
    ],
    'ParentDir' => [
        'en-us' => 'Parent Dir',
        'zh-cn' => '上一级目录',
        'ja' => '親ディレクトリ',
        'ko-kr' => '부모 디렉토리',
        'fa' => 'مسیر',
    ],
    'Folder' => [
        'en-us' => 'Folder',
        'zh-cn' => '文件夹',
        'ja' => 'フォルダー',
        'ko-kr' => '폴더',
        'fa' => 'پوشه',
    ],
    'Name' => [
        'en-us' => 'Name',
        'zh-cn' => '名称',
        'ja' => '名前',
        'ko-kr' => '이름',
        'fa' => 'نام',
    ],
    'Content' => [
        'en-us' => 'Content',
        'zh-cn' => '内容',
        'ja' => '内容',
        'ko-kr' => '내용',
        'fa' => 'محتوا',
    ],
    'CancelEdit' => [
        'en-us' => 'Cancel Edit',
        'zh-cn' => '取消编辑',
        'ja' => '編集をキャンセル',
        'ko-kr' => '편집 취소',
        'fa' => 'لغو ویرایش',
    ],
    'GetFileNameFail' => [
        'en-us' => 'Fail to Get File Name!',
        'zh-cn' => '获取文件名失败！',
        'ja' => 'ファイル名を取得できませんでした！',
        'ko-kr' => '파일 이름을 가져 오지 못했습니다!',
        'fa' => 'نام فایل به دست نیامد!',
    ],
    'GetUploadLink' => [
        'en-us' => 'Get Upload Link',
        'zh-cn' => '获取上传链接',
        'ja' => 'アップロードリンクを取得',
        'ko-kr' => '업로드 링크 받기',
        'fa' => 'دریافت لینک آپلود',
    ],
    'Calculate' => [
        'en-us' => 'Calculate',
        'zh-cn' => '计算',
    ],
    'UpFileTooLarge' => [
        'en-us' => 'The File is too Large!',
        'zh-cn' => '文件过大，终止上传。',
        'ja' => '超えると、アップロードは終了します。',
        'ko-kr' => '파일이 너무 커서 업로드가 종료되었습니다.',
        'fa' => 'فایل خیلی بزرگ است!',
    ],
    'UploadStart' => [
        'en-us' => 'Upload Start',
        'zh-cn' => '开始上传',
        'ja' => 'アップロードを開始',
        'ko-kr' => '업로드 시작',
        'fa' => 'شروع آپلود',
    ],
    'UploadStartAt' => [
        'en-us' => 'Start At',
        'zh-cn' => '开始于',
        'ja' => 'で開始',
        'ko-kr' => '에서 시작',
        'fa' => 'شروع از',
    ],
    'ThisTime' => [
        'en-us' => 'This Time',
        'zh-cn' => '本次',
        'ja' => '今回は',
        'ko-kr' => '이번에는',
        'fa' => 'این زمان',
    ],
    'LastUpload' => [
        'en-us' => 'Last time Upload',
        'zh-cn' => '上次上传',
        'ja' => '上回は',
        'ko-kr' => '마지막 업로드',
        'fa' => 'آخرین زمان آپلود',
    ],
    'AverageSpeed' => [
        'en-us' => 'AverageSpeed',
        'zh-cn' => '平均速度',
        'ja' => '平均速度',
        'ko-kr' => '평균 속도',
        'fa' => 'میانگین سرعت',
    ],
    'CurrentSpeed' => [
        'en-us' => 'CurrentSpeed',
        'zh-cn' => '即时速度',
        'ja' => 'インスタントスピード',
        'ko-kr' => '즉각적인 속도',
        'fa' => 'سرعت فعلی',
    ],
    'Expect' => [
        'en-us' => 'Expect',
        'zh-cn' => '预计还要',
        'ja' => '期待される',
        'ko-kr' => '예상',
        'fa' => 'انتظار',
    ],
    'EndAt' => [
        'en-us' => 'End At',
        'zh-cn' => '结束于',
        'ja' => 'で終了',
        'ko-kr' => '에 끝남',
        'fa' => 'پایان از',
    ],
    'UploadErrorUpAgain' => [
        'en-us' => 'Maybe error, do upload again.',
        'zh-cn' => '可能出错，重新上传。',
        'ja' => '間違っている可能性があります。もう一度アップロードしてください。',
        'ko-kr' => '잘못되었을 수 있습니다. 다시 업로드하십시오.',
        'fa' => 'خطا، دوباره آپلود کنید',
    ],
    'UploadComplete' => [
        'en-us' => 'Upload Complete',
        'zh-cn' => '上传完成',
        'ja' => 'アップロード完了',
        'ko-kr' => '업로드 완료',
        'fa' => 'آپلود با موفقیت انجام شد',
    ],
    'UploadFail23' => [
        'en-us' => 'Upload Fail, contain #.',
        'zh-cn' => '目录或文件名含有#，上传失败。',
        'ja' => 'ディレクトリまたはファイル名に＃が含まれています。アップロードに失敗しました。',
        'ko-kr' => '디렉토리 또는 파일 이름에 #이 포함되어 있습니다. 업로드하지 못했습니다.',
        'fa' => 'بارگذاری ناموفق، حاوی #.',
    ],
    'defaultSitename' => [
        'en-us' => 'OneManager',
    ],
    'SavingToken' => [
        'en-us' => 'Saving refresh_token!',
        'zh-cn' => '正在保存 refresh_token！',
        'ja' => 'refresh_tokenを保存しています！',
        'ko-kr' => 'refresh_token 저장 중!',
        'fa' => 'در حال ذخیره refresh_token!',
    ],
    'MayinEnv' => [
        'en-us' => 'The \'Drive_ver\' may in Config',
        'zh-cn' => 'Drive_ver应该已经写入',
        'ja' => 'Drive_verは環境変数に書き込まれている必要があります',
        'ko-kr' => 'Drive_verが書き込まれている必要があります',
        'fa' => 'The \'Drive_ver\' may in Config',
    ],
    'Wait' => [
        'en-us' => 'Wait',
        'zh-cn' => '稍等',
        'ja' => 'ちょっと待って',
        'ko-kr' => '잠깐만',
        'fa' => 'منتظر بمانید',
    ],
    'WaitJumpIndex' => [
        'en-us' => 'Wait 5s jump to Home page',
        'zh-cn' => '等5s跳到首页',
        'ja' => '5秒待ってホームページにジャンプします',
        'ko-kr' => '5 초 동안 홈페이지로 이동',
        'fa' => '۵ دقیقه صبر کنید تا به صفحه نخست برگردید',
    ],
    'JumptoOffice' => [
        'en-us' => 'Login Office and Get a refresh_token',
        'zh-cn' => '跳转到Office，登录获取refresh_token',
        'ja' => 'Officeにジャンプしてログインし、refresh_tokenを取得します',
        'ko-kr' => '사무실로 이동하여 로그인하여 refresh_token을 받으십시오.',
        'fa' => 'وارد Office شوید و یک refresh_token دریافت کنید',
    ],
    'OnedriveDiskTag' => [
        'en-us' => 'Onedrive Disk Tag',
        'zh-cn' => 'Onedrive 标签',
        'ja' => 'Onedriveタグ',
        'ko-kr' => 'Onedrive 태그',
        'fa' => 'برچسب دیسک Onedrive',
    ],
    'OnedriveDiskName' => [
        'en-us' => 'Onedrive Showed Name',
        'zh-cn' => 'Onedrive 显示名称',
        'ja' => 'Onedrive表示名',
        'ko-kr' => 'Onedrive 표시 이름',
        'fa' => 'نام نشان داده شده Onedrive',
    ],
    'DriveVerMS' => [
        'en-us' => 'Onedrive, Onedrive for business',
        'zh-cn' => '国际版（商业版与个人版）',
    ],
    'DriveVerCN' => [
        'en-us' => 'Onedrive in China',
        'zh-cn' => '世纪互联版',
        'ja' => '中国のOnedrive',
        'ko-kr' => '중국 Onedrive',
        'fa' => 'Onedrive در چین',
    ],
    'DriveVerShareurl' => [
        'en-us' => 'A share link of a folder',
        'zh-cn' => '共享链接',
    ],
    'UseShareLink' => [
        'en-us' => 'Share a folder in Onedrive (enable EDIT for everyone), input the link url below.',
        'zh-cn' => '对一个Onedrive文件夹共享，允许所有人编辑，然后将共享链接填在下方',
    ],
    'CustomIdSecret' => [
        'en-us' => 'Use custom client id & secret instead of OneManager default',
        'zh-cn' => '自己申请应用ID与机密，不用OneManager默认的',
        'ja' => 'アプリケーションIDとシークレットを自分で申請する',
        'ko-kr' => '응용 프로그램 ID 및 비밀 신청',
        'fa' => 'به طور پیش فرض اما از شناسه برنامه و سکرت استفاده کنید',
    ],
    'GetSecretIDandKEY' => [
        'en-us' => 'Get custom client id & secret',
        'zh-cn' => '申请应用ID与机密',
        'ja' => 'アプリケーションIDとシークレット',
        'fa' => 'دریافت شناسه برنامه و سکرت',
    ],
    'UseSharepointInstead' => [
        'en-us' => 'Use space in Sharepoint website instead of Onedrive',
        'zh-cn' => '使用Sharepoint网站的空间，不使用Onedrive',
    ],
    'GetSharepointSiteAddress' => [
        'en-us' => 'Login office.com and click the SharePoint, create a website or find an exist website, input the Site address below',
        'zh-cn' => '登录office.com，点击Sharepoint，创建一个网站（或使用原有网站），然后将它的站点地址填在下方',
    ],
    'InputSharepointSiteAddress' => [
        'en-us' => 'https://xxxxx.sharepoint.com/sites(teams)/{name}',
    ],
    'TagFormatAlert' => [
        'en-us' => 'Tag must start with a letter, end with a letter or digit and can only contain lowercase letters, digits, and dashes， at least 2 letters!',
        'zh-cn' => '标签只能以字母开头，以字母或数字结尾，至少2位',
        'ja' => 'タグは、文字で始まり、文字または数字で終わる必要があります。少なくとも2つ',
        'ko-kr' => '태그는 문자로 시작하고 문자 또는 숫자로 끝나야합니다 (2 이상).',
        'fa' => 'برچسب باید با یک حرف شروع شود، با یک حرف یا رقم پایان یابد و تنها می‌تواند حاوی حروف کوچک، ارقام و خط فاصله، حداقل ۲ حرف باشد!',
    ],
    'ClickInstall' => [
        'en-us' => 'Click to install the project',
        'zh-cn' => '点击开始安装程序',
        'ja' => 'クリックしてインストールプロセスを開始します',
        'ko-kr' => '설치 과정을 시작하려면 클릭',
        'fa' => 'برای نصب پروژه کلیک کنید',
    ],
    'LogintoBind' => [
        'en-us' => 'then login and bind your onedrive in setup',
        'zh-cn' => '然后登录后在设置中绑定你的onedrive。',
        'ja' => '次に、ログインして、設定でonedriveをバインドします。',
        'ko-kr' => '그런 다음 로그인하여 onedrive를 설정에 바인딩하십시오.',
        'fa' => 'پس از آن وارد سیستم شوید و تنظیمات خود را در onedrive متصل کنید',
    ],
    'MakesuerWriteable' => [
        'en-us' => 'Plase make sure the config.php is writeable. run writeable.sh.',
        'zh-cn' => '确认config.php可写。',
        'ja' => 'config.phpが書き込み可能であることを確認してください。',
        'ko-kr' => 'config.php가 쓰기 가능한지 확인하십시오.',
        'fa' => 'اطمینان حاصل کنید که config.php قابل نوشتن است. writeable.sh را اجرا کنید.',
    ],
    'MakesuerRewriteOn' => [
        'en-us' => 'Plase make sure the RewriteEngine is On.',
        'zh-cn' => '确认重写（伪静态）功能启用。',
        'ja' => '書き換え（擬似静的）機能が有効になっていることを確認します。',
        'ko-kr' => '다시 쓰기 (의사 정적) 기능이 활성화되어 있는지 확인하십시오.',
        'fa' => 'لطفاً مطمئن شوید که RewriteEngine روشن است.',
    ],
    'CopyUrl' => [
        'en-us' => 'Copy URL',
        'zh-cn' => '复制链接',
    ],
    'Success' => [
        'en-us' => 'Success',
        'zh-cn' => '成功',
    ],
    'SetAdminPassword' => [
        'en-us' => 'Set Admin Password',
        'zh-cn' => '设置管理密码',
    ],
    'Refresh' => [
        'en-us' => 'Refresh',
        'zh-cn' => '刷新',
        'ja' => 'リフレッシュ',
        'ko-kr' => '새로 고침',
        'fa' => 'رفرش',
    ],
    'SelectLanguage' => [
        'en-us' => 'Select Language',
        'zh-cn' => '选择语言',
        'ja' => '言語を選択してください',
        'ko-kr' => '언어를 선택하십시오',
        'fa' => 'زبان را انتخاب کنید',
    ],
    'RefreshCache' => [
        'en-us' => 'RefreshCache',
        'zh-cn' => '刷新缓存',
        'ja' => 'キャッシュを再構築',
        'ko-kr' => '캐시 플러시',
        'fa' => 'رفرش cache',
    ],
    'CannotOneKeyUpate' => [
        'en-us' => 'Can not update by a click! run update.sh',
        'zh-cn' => '不能一键更新，可以运行update.sh',
    ],
    'QueryBranchs' => [
        'en-us' => 'Query Branchs',
        'zh-cn' => '查询分支',
    ],
    'ONEMANAGER_CONFIG_SAVE_ENV' => [
        'en-us' => 'Config save in Environments',
        'zh-cn' => '配置保存在环境变量',
    ],
    'ONEMANAGER_CONFIG_SAVE_FILE' => [
        'en-us' => 'Config save in code file, may cause fee',
        'zh-cn' => '配置保存在代码文件中，可能产生费用',
    ],
];
