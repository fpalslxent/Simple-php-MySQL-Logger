# Simple-php-MySQL-Logger
간편하게 php 로 MySQL에 사용자 접속정보를 로그하는 코드

## 아래와 같은 DB TABLE이 필요합니다
해당 Repo는 sql 파일을 제공하지 않으니 아래와같이 DB TABLE을 생성하세요
- TABLE NAME: log
- Column: idx(AUTO_INCREMENT), ip, useragent, time
