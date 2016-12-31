1. app/http/controllers
2. routes/web.php -> only routering으로서만 기능하도록 설정할 것
3. public/ -> apache root and built files repo 
4. public/assets/js/components/vue 템플릿 사용여부 검토해볼 것
5. php artisan migrate의 사용범위 결정
6. storage/logs에 log파일을 추적하면서 개발을 할 수 있다 별도로 로그 파일을 이곳에 남기고 있다 -> 로그파일을 S3로 옮기는 작업과 지우는 처리를 해주어야 한다



1. 기본적인 CRUD를 배워보자
https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
이 문서에 테이블을 생성하고 지우고 변경하고 테이블간의 관계를 정의하는 설명이 간략하게 제공되고 있다.

2. API를 확인해보자
https://laravel.com/api/5.3/

