# 뇌섹남녀 프로젝트 소개
`뇌섹남녀`는 인기 TV 프로그램 '문제적 남자'에서 영감을 받아 만든 퀴즈 사이트입니다. 사용자들은 다양한 카테고리의 퀴즈를 풀면서 자신의 지식을 시험해볼 수 있습니다. 이 사이트는 PHP를 기반으로 구축되었으며, 로그인 시스템, 커뮤니티 게시판, 퀴즈 풀이 기능 등을 포함하고 있습니다.

(바로가기)[http://hoho.dothome.co.kr/project/php/home/main.php]

## 기술 스택
- Front-end: HTML, CSS, JavaScript
- Back-end: PHP
- Database: MySQL

## 주요 기능
- 로그인 및 회원가입 시스템: 사용자는 개인 계정을 통해 사이트에 로그인하고, 다양한 기능을 이용할 수 있습니다.
- 커뮤니티 게시판: 사용자들은 자유롭게 소통하고 정보를 공유할 수 있는 게시판을 이용할 수 있습니다.
- 퀴즈 플랫폼: 다양한 종류의 퀴즈를 풀고, 정답을 맞힐 수 있는 기능입니다. 퀴즈는 관리자 페이지를 통해 추가 및 관리할 수 있습니다.
- 관리자 페이지: 관리자는 이 페이지를 통해 퀴즈 문제, 정답, 관련 이미지 등을 데이터베이스에 추가할 수 있습니다.
- 퀴즈 타이머, 좋아요 수, 조회수: 각 퀴즈는 타이머와 함께 제공되며, 사용자들은 퀴즈에 좋아요를 남기거나 조회수를 확인할 수 있습니다.
카테고리별 퀴즈 분류: 퀴즈는 수학, 창의력, 추리 등 여러 카테고리로 분류됩니다.

## 기능 상세
### 커뮤니티 게시판
'뇌섹남녀' 사이트의 핵심 기능 중 하나는 사용자들이 자유롭게 소통하고 정보를 공유할 수 있는 커뮤니티 게시판입니다. 사용자들은 자신의 생각을 글로 작성하고 다른 사용자들과 의견을 나눌 수 있습니다. 게시판은 다음과 같은 기능들로 구성되어 있습니다.

- 글쓰기: 사용자들은 게시판에 새로운 글을 작성할 수 있습니다.
- 글 목록 및 페이징: 작성된 글들은 목록으로 표시되며, 페이지 당 표시되는 글의 수를 조절할 수 있습니다.
- 글 검색: 사용자들은 게시판 내에서 특정 키워드를 기반으로 글을 검색할 수 있습니다.
- 게시글 보기: 사용자들은 각 게시글을 클릭하여 자세한 내용을 볼 수 있습니다.
- 카테고리별 분류: 게시글은 카테고리별로 분류되어 사용자들이 원하는 주제의 글을 쉽게 찾을 수 있습니다.

### 퀴즈 플랫폼
'뇌섹남녀'는 단순한 정보 공유를 넘어 사용자들이 직접 퀴즈를 풀어보며 지식을 검증하고 즐거운 시간을 보낼 수 있는 플랫폼을 제공합니다. 퀴즈 플랫폼은 다음과 같은 기능들로 구성되어 있습니다.

- 퀴즈 목록 및 페이징: 사용자들은 다양한 퀴즈를 페이지별로 나열된 목록에서 볼 수 있으며, 각 페이지마다 일정 수의 퀴즈를 보여줍니다.
- 퀴즈 필터링: 최신순, 인기순, 안 푼 문제 등 다양한 필터 옵션을 통해 원하는 퀴즈를 쉽게 찾을 수 있습니다.
- 찜 기능: 사용자들은 관심 있는 퀴즈에 '좋아요'를 표시하여 찜 목록에서 쉽게 다시 찾아볼 수 있습니다.
- 동적 컨텐츠 로딩: AJAX를 활용하여 사용자의 선택에 따라 퀴즈 목록을 실시간으로 업데이트하며, 페이지 로딩 없이 콘텐츠를 표시합니다.

## 기술 세부 사항
- PHP를 이용한 서버 사이드 렌더링: 이 사이트는 PHP를 이용하여 서버 사이드에서 페이지를 렌더링합니다. 이를 통해 다양한 데이터 처리 및 동적 컨텐츠 생성이 가능합니다.
- MySQL 데이터베이스: 게시글, 사용자 정보 및 퀴즈 데이터는 MySQL 데이터베이스에 저장되며, PHP를 통해 관리됩니다.
- 페이지네이션 구현: 사용자가 한 번에 많은 수의 게시글을 볼 필요 없이 페이지별로 나누어 볼 수 있도록 페이지네이션 기능을 구현했습니다.
- AJAX를 사용한 검색 기능: 사용자가 검색어를 입력할 때 AJAX 요청을 통해 실시간으로 검색 결과를 표시합니다.
- CSS 스타일링과 jQuery: UI/UX를 향상시키기 위해 CSS와 jQuery를 사용하여 동적인 사용자 인터페이스를 제공합니다.
