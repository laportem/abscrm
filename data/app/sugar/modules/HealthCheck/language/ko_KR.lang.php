<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_MODULE_NAME' => '건강 검진',
    'LBL_MODULE_NAME_SINGULAR' => '건강 검진',
    'LBL_MODULE_TITLE' => '건강 검진',
    'LBL_LOGFILE' => '로그 파일',
    'LBL_BUCKET' => '버킷',
    'LBL_FLAG' => '플래그',
    'LBL_LOGMETA' => '메타 로그',
    'LBL_ERROR' => '오류',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => '데이터 직렬화를 취소할 수 없습니다',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => '데이터에 개체 또는 클래스에 대한 참조가 포함되어 있어 데이터 직렬화를 취소할 수 없습니다',

    'LBL_SCAN_101_LOG' => '%s는 스튜디오 기록을 가지고 있습니다',
    'LBL_SCAN_102_LOG' => '%는 확장명이 있습니다: %s',
    'LBL_SCAN_103_LOG' => '%s는 사용자 정의 vardefs가 있습니다',
    'LBL_SCAN_104_LOG' => '%s는 사용자 정의 layoutdefs가 있습니다',
    'LBL_SCAN_105_LOG' => '%s는 사용자 정의 viewdefs가 있습니다',

    'LBL_SCAN_201_LOG' => '%s는 주식 모듈이 아닙니다',

    'LBL_SCAN_301_LOG' => '%s는 BWC로 실행해야합니다',
    'LBL_SCAN_302_LOG' => '알 수 없는 파일 현재 보기 - %는 MB 모듈이 아닙니다',
    'LBL_SCAN_303_LOG' => '빈 양식이 아닌 파일 %s - %s는 MB 모듈이 아닙니다',
    'LBL_SCAN_304_LOG' => '알 수 없는 파일 %s - %s는 MB 모듈이 아닙니다',
    'LBL_SCAN_305_LOG' => '잘못된 vardefs - 키 %s, 이름 %s',
    'LBL_SCAN_306_LOG' => '잘못된 vardefs - 관련 필드 %s은 (는) 빈 `모듈`이 있습니다',
    'LBL_SCAN_307_LOG' => '잘못된 vardefs - 링크 %s는 잘못된 관계를 의미합니다',
    'LBL_SCAN_308_LOG' => '%s에서의 Vardef HTML 함수',
    'LBL_SCAN_309_LOG' => '%s의 잘못된 md5',
    'LBL_SCAN_310_LOG' => '알 수 없는 파일 %s/%s',
    'LBL_SCAN_311_LOG' => '필드 %s에 대한 $module 모듈에서의 Vardef HTML 함수 %s',
    'LBL_SCAN_312_LOG' => '잘못된 vardefs -  &#39;이름&#39; 필드 형식은 &#39;%s&#39;가 유효하지 않으며&#39;, 모듈 - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => '감지된 확장의 디렉토리 %s - %s는 MB 모듈이 아닙니다',
    'LBL_SCAN_314_LOG' => "잘못된 vardefs - 옵션 목록 &#39;%s&#39; 키와 multienum 필드 &#39;%s&#39;이 (가) 호환되지 않는 문자 - &#39;{%s}를 포함합니다&#39;",

    'LBL_SCAN_401_LOG' => '공급업체로 이동한 파일들에 대해 공급업체 파일 포함 발견:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => '잘못된 모듈 %s - beanList 및 파일 시스템에 있지 않습니다',
    'LBL_SCAN_403_LOG' => '다음에 대한 특정 슈가 파일 포함 발견:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => '_ui_frame후에 로직 후크가 감지되었습니다',
    'LBL_SCAN_521_LOG' => '_ui_footer후에 로직 후크가 감지되었습니다',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s는 사용자 정의보기가 있습니다',
    'LBL_SCAN_407_LOG' => '%s는 사용자 정의보기가 있습니다',
    'LBL_SCAN_408_LOG' => '%s에서 사용자 지정 만들기 작업 구성 요소가 발견되었습니다. 업그레이드 중에 해당 구성 요소를 복사하고 수정하여 만들기 구성 요소를 대신 확장합니다.',
    'LBL_SCAN_519_LOG' => '감지된 &#39;확장 디렉토리 %s',
    'LBL_SCAN_518_LOG' => '%s에서 발견된 customCode의 %s',
    'LBL_SCAN_410_LOG' => '최대 필드 - %s에서 %s 필드 (%s)보다 더 많이 발견되었습니다',
    'LBL_SCAN_522_LOG' => '%s의 &#39;함수:&#39; 값과 &#39;get_서브패널_데이터&#39;을 (를) 찾을 수 있습니다',
    'LBL_SCAN_412_LOG' => '%s의 잘못된 서브 패널 링크%s',
    'LBL_SCAN_413_LOG' => '감지된 알 수 없는 위젯 클래스: %s에 대한 %s',
    'LBL_SCAN_414_LOG' => 'CRYS-36에 의해 처리되는 알 수 없는 필드이며, 따라서 여기에서 더 이상 확인할 수 없습니다',
    'LBL_SCAN_415_LOG' => '%s의 잘못된 후크(Bad hook) 파일: %s',
    'LBL_SCAN_523_LOG' => '후크 파일 %s 함수에서 참조에 의한 매개 변수',
    'LBL_SCAN_417_LOG' => '호환되지 않는 모듈 %s',
    'LBL_SCAN_418_LOG' => '존재하지 않는 모듈에 링크 서브 패널을 찾았습니다: %s',
    'LBL_SCAN_419_LOG' => '잘못된 vardefs - 키 %s, 이름 %s',
    'LBL_SCAN_420_LOG' => '잘못된 vardefs - 관련 필드 %s은 (는) 빈 `모듈`이 있습니다',
    'LBL_SCAN_421_LOG' => '잘못된 vardefs - 링크 %s는 잘못된 관계를 의미합니다',
    'LBL_SCAN_422_LOG' => '모듈 %s에 파일 %s에 있는 다른 모듈 %s의 정의가 있습니다.',
    'LBL_SCAN_525_LOG' => '%s에서의 Vardef HTML 함수',
    'LBL_SCAN_423_LOG' => '잘못된 vardefs - %s은 (는) 잘못된 서브 필드 %s를 (을) 의미합니다',
    'LBL_SCAN_424_LOG' => '라인 %s에서 %s의 인라인 HTML 발견',
    'LBL_SCAN_425_LOG' => '라인 %s에서 %s의 "에코"를 찾았습니다',
    'LBL_SCAN_426_LOG' => '라인 %s에서 %s의 "인쇄"를 찾았습니다',
    'LBL_SCAN_427_LOG' => '라인 %s에서 %s의 "die/종료"를 찾았습니다',
    'LBL_SCAN_428_LOG' => '라인 %s에서 %s의 "print_r"을 (를) 찾았습니다',
    'LBL_SCAN_429_LOG' => '라인 %s에서 %s의 "var_dump"을 (를) 찾았습니다',
    'LBL_SCAN_430_LOG' => '라인 %s에서 %s의 발견된 출력 버퍼링 (%s)',
    'LBL_SCAN_451_LOG' => 'AuthN 코드가 삭제되었으므로 대신 \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate를 사용하십시오. 삭제된 코드가 있는 파일:' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => '필드 %s에 대한 %s모듈 모듈에서의 Vardef HTML 함수 %s',
    'LBL_SCAN_432_LOG' => '잘못된 vardefs -  &#39;이름&#39; 필드 형식은 &#39;%s&#39;가 유효하지 않으며&#39;, 모듈 - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "잘못된 vardefs - 옵션 목록 &#39;%s&#39; 키와 multienum 필드 &#39;%s&#39;이 (가) 호환되지 않는 문자 - &#39;{%s}를 포함합니다&#39;",
    'LBL_SCAN_527_LOG' => "bean %s에 있는 표 이름은 %s/vardefs.php에서 테이블 속성과 일치하지 않습니다",
    'LBL_SCAN_528_LOG' => '%의 모듈의 필드 % s은 (는) 잘못된 display_default 값이',
    'LBL_SCAN_529_LOG' => '% s: %s의 라인에 파일 % s에서 % s',
    'LBL_SCAN_530_LOG' => '사용자 정의 파일 없음: %s',
    'LBL_SCAN_531_LOG' => '삭제예정 데이터베이스 드라이버: %s',
    'LBL_SCAN_532_LOG' => 'A class in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_LOG' => 'A class in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_LOG' => '지원되지 않는 데이터베이스 드라이버입니다: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => '사용자화 Elastic 검색 파일 %s(을)를 찾았습니다',
    'LBL_SCAN_434_LOG' => '다음파일에서 $_SESSION 에사용한배열기능: %s',
    'LBL_SCAN_435_LOG' => 'SugarSession 클래스가 API에서 제거되었습니다. Sugarcrm\Sugarcrm\Session\SessionStorage를 대신 사용하십시오. 사용되지 않는 코드를 가진 파일: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => '사용자 지정/모듈/인용/quotes.js가 새 인용과 호환되지 않는 사용자 지정을 포함할 수 있습니다.',
    'LBL_SCAN_561_LOG' => '사용자 지정/모듈/인용/EditView.js가 새 인용과 호환되지 않는 사용자 지정을 포함할 수 있습니다.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => '잘못된 이메일 상태 및 유형: 상태=%s, 유형=%s',
    'LBL_SCAN_571_LOG' => '사용되지 않는 파일에 커스텀 지정: %s',
    'LBL_SCAN_572_LOG' => '커스텀 파일 이름 충돌: %s',
    'LBL_SCAN_573_LOG' => '커스텀 도움말 파일 이름 충돌: %s',
    'LBL_SCAN_574_LOG' => '이메일 서브패널 존재 사용자 정의 디렉토리: %s',
    'LBL_SCAN_575_LOG' => '이메일 연락처 서브패널을 변경하여 연락처 저장 이메일 서브패널을 사용하도록 해야 합니다. %s',
    'LBL_SCAN_576_LOG' => '스킨 사용자 지정이 `%s`에서 발견되었습니다. 최종 스킨 결과는 예상대로 작동하지 않을 수 있으니 스킨 사용자 지정을 확인하십시오.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => '`%s`에서 금지된 진술 발견: %s',

    'LBL_SCAN_501_LOG' => '누락 파일 : %s',
    'LBL_SCAN_502_LOG' => '%s의 md5 불일치, 예상 %s',
    'LBL_SCAN_503_LOG' => '최신 Sugar7 모듈과 동일한 이름을 가진 사용자 정의 모듈 : %s',
    'LBL_SCAN_504_LOG' => '모듈 %s에 있는 필드 형식  누락 : %s',
    'LBL_SCAN_505_LOG' => '필드 %s의 대한 %의 형식 변경: &#39;%s에서 %s까지',
    'LBL_SCAN_506_LOG' => '%s 의 $this 러한 사용',
    'LBL_SCAN_507_LOG' => '잘못된 vardefs - %s은 (는) 잘못된 서브 필드 %s를 (을) 의미합니다',
    'LBL_SCAN_508_LOG' => '라인 %s에서 %s의 인라인 HTML 발견',
    'LBL_SCAN_509_LOG' => '라인 %s에서 %s의 "에코"를 찾았습니다',
    'LBL_SCAN_510_LOG' => '라인 %s에서 %s의 "인쇄"를 찾았습니다',
    'LBL_SCAN_511_LOG' => '라인 %s에서 %s의 "die/종료"를 찾았습니다',
    'LBL_SCAN_512_LOG' => '라인 %s에서 %s의 "print_r"을 (를) 찾았습니다',
    'LBL_SCAN_513_LOG' => '라인 %s에서 %s의 "var_dump"을 (를) 찾았습니다',
    'LBL_SCAN_514_LOG' => '라인 %s에서 %s의 발견된 출력 버퍼링 (%s)',
    'LBL_SCAN_515_LOG' => '스크립트 실패: %s',
    'LBL_SCAN_516_LOG' => '이전 제거 파일에서 참조하여 찾았습니다: %s',
    'LBL_SCAN_517_LOG' => '호환되지 않는 통합 - %s %s',
    'LBL_SCAN_540_LOG' => '호환불가 통합 데이터 리셋-%s %s',
    'LBL_SCAN_541_LOG' => '유효하지 않은 SugarBPM 시리얼라이제이션 - %s 유효하지 않은 시리얼라이제이션, %s 컬럼, %s 테이블:  %s.',
    'LBL_SCAN_542_LOG' => '유효하지 않은 SugarBPM 필드 사용 - %s 유효하지 않은 필드가 %s에 사용됨.',
    'LBL_SCAN_545_LOG' => 'SugarBPM이 일부 필드 그룹을 잠갔습니다 - %s 모듈을 위한 프로세스 정의 %s의 그룹 %s 내 잠긴 필드 %4$s',
    'LBL_SCAN_546_LOG' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_LOG' => '%s의 삭제된 `resetLoadFlag` 서명 사용',
    'LBL_SCAN_548_LOG' => '%s의 사용되지 않는 `initButtons` 서명 사용',
    'LBL_SCAN_549_LOG' => '%s의 삭제된 `getField` 서명 사용',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => '인스턴스는 이미 Suga 7로 업그레이드되었습니다',
    'LBL_SCAN_903_LOG' => '지원되지 않는 업그레이 더 버전. 해당 SugarUpgradeWizardPrereq 패키지를 설치하십시오',
    'LBL_SCAN_904_LOG' => 'ModuleList 문자열에 NULL 값을 찾음. 파일: %s, 모듈: %s',
    'LBL_SCAN_999_LOG' => '알 수 없는 오류이며, 고객지원에 문의하십시오',

    'LBL_SCAN_101_TITLE' => '%s는 스튜디오 기록을 가지고 있습니다',
    'LBL_SCAN_102_TITLE' => '%는 확장명이 있습니다: %s',
    'LBL_SCAN_103_TITLE' => '%s는 사용자 정의 vardefs가 있습니다',
    'LBL_SCAN_104_TITLE' => '%s는 사용자 정의 layoutdefs가 있습니다',
    'LBL_SCAN_105_TITLE' => '%s는 사용자 정의 viewdefs가 있습니다',

    'LBL_SCAN_201_TITLE' => '%s는 주식 모듈이 아닙니다',

    'LBL_SCAN_301_TITLE' => '%s는 BWC로 실행해야합니다',
    'LBL_SCAN_302_TITLE' => '알 수 없는 파일 현재 보기 - %는 MB 모듈이 아닙니다',
    'LBL_SCAN_303_TITLE' => '빈 양식이 아닌 파일 %s - %s는 MB 모듈이 아닙니다',
    'LBL_SCAN_304_TITLE' => '알 수 없는 파일 %s - %s는 MB 모듈이 아닙니다',
    'LBL_SCAN_305_TITLE' => '잘못된 vardefs - 키 %s, 이름 %s',
    'LBL_SCAN_306_TITLE' => '잘못된 vardefs - 관련 필드 %s은 (는) 빈 `모듈`이 있습니다',
    'LBL_SCAN_307_TITLE' => '잘못된 vardefs - 링크 %s는 잘못된 관계를 의미합니다',
    'LBL_SCAN_308_TITLE' => '%s에서의 Vardef HTML 함수',
    'LBL_SCAN_309_TITLE' => '%s의 잘못된 md5',
    'LBL_SCAN_310_TITLE' => '알 수 없는 파일 %s/%s',
    'LBL_SCAN_311_TITLE' => '필드 %s에 대한 $module 모듈에서의 Vardef HTML 함수 %s',
    'LBL_SCAN_312_TITLE' => '잘못된 vardefs -  &#39;이름&#39; 필드 형식은 &#39;%s&#39;가 유효하지 않으며&#39;, 모듈 - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => '감지된 확장의 디렉토리 %s - %s는 MB 모듈이 아닙니다',

    'LBL_SCAN_401_TITLE' => '공급업체로 이동한 파일들에 대해 공급업체 파일 포함 발견:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => '잘못된 모듈 %s - beanList 및 파일 시스템에 있지 않습니다',
    'LBL_SCAN_403_TITLE' => '다음에 대한 특정 슈가 파일 포함 발견:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => '_ui_frame후에 로직 후크가 감지되었습니다',
    'LBL_SCAN_521_TITLE' => '_ui_footer후에 로직 후크가 감지되었습니다',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s는 사용자 정의보기가 있습니다',
    'LBL_SCAN_407_TITLE' => '%s는 사용자 정의보기가 있습니다',
    'LBL_SCAN_408_TITLE' => '더 이상 지원되지 않는 사용자 지정 만들기-작업 구성 요소가 발견되었습니다.',
    'LBL_SCAN_519_TITLE' => '감지된 &#39;확장 디렉토리 %s',
    'LBL_SCAN_518_TITLE' => '%s에서 발견된 customCode의 %s',
    'LBL_SCAN_410_TITLE' => '최대 필드 - %s에서 %s 필드 (%s)보다 더 많이 발견되었습니다',
    'LBL_SCAN_522_TITLE' => '%s의 &#39;함수:&#39; 값과 &#39;get_서브패널_데이터&#39;을 (를) 찾을 수 있습니다',
    'LBL_SCAN_412_TITLE' => '%s의 잘못된 서브 패널 링크%s',
    'LBL_SCAN_413_TITLE' => '감지된 알 수 없는 위젯 클래스: %s에 대한 %s',
    'LBL_SCAN_414_TITLE' => 'CRYS-36에 의해 처리되는 알 수 없는 필드이며, 따라서 여기에서 더 이상 확인할 수 없습니다',
    'LBL_SCAN_415_TITLE' => '%s의 잘못된 후크(Bad hook) 파일: %s',
    'LBL_SCAN_523_TITLE' => '후크 파일 %s 함수에서 참조에 의한 매개 변수',
    'LBL_SCAN_417_TITLE' => '호환되지 않는 모듈 %s',
    'LBL_SCAN_418_TITLE' => '존재하지 않는 모듈에 링크 서브 패널을 찾았습니다: %s',
    'LBL_SCAN_419_TITLE' => '잘못된 vardefs - 키 %s, 이름 %s',
    'LBL_SCAN_420_TITLE' => '잘못된 vardefs - 관련 필드 %s은 (는) 빈 `모듈`이 있습니다',
    'LBL_SCAN_421_TITLE' => '잘못된 vardefs - 링크 %s는 잘못된 관계를 의미합니다',
    'LBL_SCAN_422_TITLE' => '%s 모듈에는 다른 모듈의 정의가 있습니다',
    'LBL_SCAN_525_TITLE' => '%s에서의 Vardef HTML 함수',
    'LBL_SCAN_423_TITLE' => '잘못된 vardefs - %s은 (는) 잘못된 서브 필드 %s를 (을) 의미합니다',
    'LBL_SCAN_424_TITLE' => '라인 %s에서 %s의 인라인 HTML 발견',
    'LBL_SCAN_425_TITLE' => '라인 %s에서 %s의 "에코"를 찾았습니다',
    'LBL_SCAN_426_TITLE' => '라인 %s에서 %s의 "인쇄"를 찾았습니다',
    'LBL_SCAN_427_TITLE' => '라인 %s에서 %s의 "die/종료"를 찾았습니다',
    'LBL_SCAN_428_TITLE' => '라인 %s에서 %s의 "print_r"을 (를) 찾았습니다',
    'LBL_SCAN_429_TITLE' => '라인 %s에서 %s의 "var_dump"을 (를) 찾았습니다',
    'LBL_SCAN_430_TITLE' => '라인 %s에서 %s의 발견된 출력 버퍼링 (%s)',
    'LBL_SCAN_451_TITLE' => 'AuthN 코드가 삭제되었으므로 대신 \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate를 사용하십시오. 삭제된 코드가 있는 파일:' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => '필드 %s에 대한 %s모듈 모듈에서의 Vardef HTML 함수 %s',
    'LBL_SCAN_432_TITLE' => '잘못된 vardefs -  &#39;이름&#39; 필드 형식은 &#39;%s&#39;가 유효하지 않으며&#39;, 모듈 - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => '사용자화 Elastic 검색 파일 %s(을)를 찾았습니다',
    'LBL_SCAN_434_TITLE' => '다음파일에서 $_SESSION 에사용한배열기능: %s',
    'LBL_SCAN_435_TITLE' => '제거된 SugarSession 클래스 사용이 발견되었습니다',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => '누락 파일 : %s',
    'LBL_SCAN_502_TITLE' => '%s의 md5 불일치, 예상 %s',
    'LBL_SCAN_503_TITLE' => '최신 Sugar7 모듈과 동일한 이름을 가진 사용자 정의 모듈 : %s',
    'LBL_SCAN_504_TITLE' => '모듈 %s에 있는 필드 형식  누락 : %s',
    'LBL_SCAN_505_TITLE' => '필드 %s의 대한 %의 형식 변경: &#39;%s에서 %s까지',
    'LBL_SCAN_506_TITLE' => '%s 의 $this 러한 사용',
    'LBL_SCAN_507_TITLE' => '잘못된 vardefs - %s은 (는) 잘못된 서브 필드 %s를 (을) 의미합니다',
    'LBL_SCAN_508_TITLE' => '라인 %s에서 %s의 인라인 HTML 발견',
    'LBL_SCAN_509_TITLE' => '라인 %s에서 %s의 "에코"를 찾았습니다',
    'LBL_SCAN_510_TITLE' => '라인 %s에서 %s의 "인쇄"를 찾았습니다',
    'LBL_SCAN_511_TITLE' => '라인 %s에서 %s의 "die/종료"를 찾았습니다',
    'LBL_SCAN_512_TITLE' => '라인 %s에서 %s의 "print_r"을 (를) 찾았습니다',
    'LBL_SCAN_513_TITLE' => '라인 %s에서 %s의 "var_dump"을 (를) 찾았습니다',
    'LBL_SCAN_514_TITLE' => '라인 %s에서 %s의 발견된 출력 버퍼링 (%s)',
    'LBL_SCAN_515_TITLE' => '스크립트 실패: %s',
    'LBL_SCAN_517_TITLE' => '호환되지 않는 통합 - %s %s',
    'LBL_SCAN_526_TITLE' => "잘못된 vardefs - 옵션 목록 &#39;%s&#39; 키와 multienum 필드 &#39;%s&#39;이 (가) 호환되지 않는 문자 - &#39;{%s}를 포함합니다&#39;",
    'LBL_SCAN_528_TITLE' => '%의 모듈의 필드 % s은 (는) 잘못된 display_default 값이',
    'LBL_SCAN_529_TITLE' => '% s: %s의 라인에 파일 % s에서 % s',
    'LBL_SCAN_530_TITLE' => '사용자 정의 파일 없음: %s',
    'LBL_SCAN_531_TITLE' => '삭제예정 데이터베이스 드라이버: %s',
    'LBL_SCAN_532_TITLE' => 'Stock parent PHP4 constructor call in %s',
    'LBL_SCAN_533_TITLE' => 'Custom parent PHP4 constructor call in %s',
    'LBL_SCAN_534_TITLE' => '지원하지 않는 데이터베이스 드라이버입니다: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => '호환불가 통합 데이터 리셋-%s %s',
    'LBL_SCAN_541_TITLE' => '유효하지 않은 SugarBPM 시리얼라이제이션 - %s 유효하지 않은 시리얼라이제이션, %s 컬럼, %s 테이블:  %s',
    'LBL_SCAN_542_TITLE' => '유효하지 않은 SugarBPM 필드 사용 - %s 유효하지 않은 필드가 %s에 사용됨.',
    'LBL_SCAN_545_TITLE' => 'SugarBPM이 일부 필드 그룹을 잠갔습니다 - 프로세스 정의 %s의 그룹 %s 내 잠긴 필드 %3$s',
    'LBL_SCAN_546_TITLE' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_TITLE' => '%s의 삭제된 `resetLoadFlag` 서명 사용',
    'LBL_SCAN_548_TITLE' => '%s의 사용되지 않는 `initButtons` 서명 사용',
    'LBL_SCAN_549_TITLE' => '%s의 삭제된 `getField` 서명 사용',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => '이메일에 예기치 않은 값 있음',
    'LBL_SCAN_571_TITLE' => '커스텀 파일에 사용되지 않는 코드 포함',
    'LBL_SCAN_572_TITLE' => '커스텀 파일 이름 충돌',
    'LBL_SCAN_573_TITLE' => '커스텀 도움말 파일 이름 충돌',
    'LBL_SCAN_574_TITLE' => '이메일 서브패널에 사용자 정의 사항이 있습니다',
    'LBL_SCAN_575_TITLE' => '이메일 연락처 서브패널에 사용자 정의 사항이 있습니다',
    'LBL_SCAN_576_TITLE' => '스킨 사용자 정의가 발견되었습니다',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => '금지된 진술 발견됨',

    'LBL_SCAN_901_TITLE' => '인스턴스는 이미 Suga 7로 업그레이드되었습니다',
    'LBL_SCAN_903_TITLE' => 'The upgrader unsupported version',
    'LBL_SCAN_904_TITLE' => 'ModuleList 문자열에서 NULL 값을 찾음',
    'LBL_SCAN_999_TITLE' => '알 수 없는 오류이며, 고객지원에 문의하십시오',

    'LBL_SCAN_101_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',
    'LBL_SCAN_102_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',
    'LBL_SCAN_103_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',
    'LBL_SCAN_104_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',
    'LBL_SCAN_105_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',

    'LBL_SCAN_201_DESCR' => '스튜디오 사용자 지정이 인스턴스에서 감지되었습니다. 이 사용자 정의에서 문제가 예상되지 않으며 사용자 지정은 Sugar7로 업그레이드되었습니다.',

    'LBL_SCAN_301_DESCR' => '특정 사용자 지정 항목이 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 모듈 (% s)는 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_302_DESCR' => '알 수 없는 파일보기가 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 모듈 (%s) 는 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_303_DESCR' => '빈 양식이 아닌 파일이 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 모듈 (%s)은 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_304_DESCR' => '알 수 없는 파일 (%s)이 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 모듈 (%s)는 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_305_DESCR' => '잘못된 vardefs(%s: %s)가 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 정의는 계속 사용할 수 있지만 Sugar7에 이전 버전의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_306_DESCR' => '잘못된 vardefs가 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 관련 필드 (%s)에 빈`module`이 있습니다. 이 정의는 계속 사용할 수 있지만 Sugar7에 이전 버전의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_307_DESCR' => '잘못된 vardefs가 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 링크 (%s)는 유효하지 않은 관계를 의미합니다. 이 정의는 계속 사용할 수 있지만 Sugar7에 이전 버전의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_308_DESCR' => '특정 사용자 지정 항목이 감지되었으며 Sugar7로 마이그레이션되지 않았다. 이 모듈 (% s)는 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_309_DESCR' => '%s의 md5 hash는 상자 파일에서 일치하지 않습니다. 이 파일이 수정되었을 수 있으므로 &#39;Sugar7로 업그레이드되지 않습니다',
    'LBL_SCAN_310_DESCR' => '알 수 없는 파일(%s)이 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 이 모듈 (%s)은 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다',
    'LBL_SCAN_311_DESCR' => '특정 사용자 지정 항목이 감지되었으며 Sugar7로 마이그레이션되지 않았다. 이 모듈 (% s)는 계속 사용할 수 있지만 Sugar7에 이전 버전과의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_312_DESCR' => '잘못된 vardefs가 감지되었으며 Sugar7로 마이그레이션되지 않았습니다. 잘못된 vardefs : &#39;이름&#39; 필드 형식이 모듈 &#39;%s\에 대한 &#39;%s&#39;이 잘못되었습니다. 이 정의는 계속 사용할 수 있지만 Sugar7에 이전 버전의 호환성 모드에서 실행됩니다.',
    'LBL_SCAN_313_DESCR' => '확장 디렉토리가 발견되었습니다 - %s는 모듈 빌더(Module Buider) 모듈이 아닙니다. 이 모듈은 사용할 수 있지만 이전 버전의 호환성 모드에서만 계속 사용할 수 있습니다.',

    'LBL_SCAN_401_DESCR' => '사용자 정의 파일은 공급 업체 디렉토리로 이동한 파일이 포함되어 있습니다. 시정 조치를 취하도록 시도하였으며 더 이상의 조치가 필요하지 않습니다.',
    'LBL_SCAN_402_DESCR' => '잘못된 모듈 %s - beanList 및 파일 시스템에 있지 않습니다',
    'LBL_SCAN_403_DESCR' => '슈가 파일 중 일부는 슈가 7에서 그것들의 위치를 변경했습니다.  포함 경로가 해결되어야 합니다.',
    'LBL_SCAN_520_DESCR' => '이 로직 후크는 더 이상 Sugar 7에서 지원되지 않습니다',
    'LBL_SCAN_521_DESCR' => '이 로직 후크는 더 이상 Sugar 7에서 지원되지 않습니다',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Stock Sugar 모듈은 사용자 정의/모듈/%s/보기에서 사용자 정의보기가 있습니다',
    'LBL_SCAN_407_DESCR' => 'Stock Sugar 모듈은 모듈/%s/보기에서 사용자 정의보기가 있습니다',
    'LBL_SCAN_408_DESCR' => '%s에서 사용자 지정 만들기 작업 구성 요소가 발견되었습니다. 업그레이드 중에 해당 구성 요소를 복사하고 수정하여 만들기 구성 요소를 대신 확장합니다.',
    'LBL_SCAN_519_DESCR' => 'Stock Sugar 모듈은 사용자지정 라우팅, 액세스 제어, 자바 스크립트 등과 같은 업그레이드를 지원하지 않는 확장명 중 하나입니다.',
    'LBL_SCAN_518_DESCR' => 'vardefs는 변환하는 방법을 알 수 없는 사용자 customCode 정의를 포함하고 있습니다',
    'LBL_SCAN_410_DESCR' => '보기에 너무 많은 필드가 있습니다',
    'LBL_SCAN_522_DESCR' => '서브 패널 데이터가 함수를 가져오며, 아직 업그레이드를 지원하지 않습니다.',
    'LBL_SCAN_412_DESCR' => '서브 패널이란 존재하지 않거나 제대로 정의되지 않은 링크를 말합니다',
    'LBL_SCAN_413_DESCR' => '필드는 일치하는 위젯 클래스 파일이 없는 위젯 클래스 이름을 말합니다',
    'LBL_SCAN_414_DESCR' => 'CRYS-36에 의해 처리되는 알 수 없는 필드이며, 따라서 여기에서 더 이상 확인할 수 없습니다',
    'LBL_SCAN_415_DESCR' => '로직 후크(Logic hook)란 없는 파일을 말합니다',
    'LBL_SCAN_523_DESCR' => '구 로직 후크(Old logic hook) 파일은 참조에 의한 전달 매개변수를 사용하며, 표시되는 오류 메시지가 발생할 수 있습니다 (따라서 REST 작업실패)',
    'LBL_SCAN_417_DESCR' => '감지된 모듈 피드 또는 iFrames이 더 이상 존재하지 않아야 합니다',
    'LBL_SCAN_418_DESCR' => '서브 패널은 존재하지 않는 모듈을 말합니다',
    'LBL_SCAN_419_DESCR' => 'Vardef 키는 vardef 이름과 일치하지 않습니다',
    'LBL_SCAN_420_DESCR' => 'Vardef가 제대로 로드할 수 없는 관계를 참조하는 관련 필드를 포함하고 있습니다',
    'LBL_SCAN_421_DESCR' => 'Vardef가 제대로 로드할 수 없는 링크 필드를 포함하고 있습니다',
    'LBL_SCAN_422_DESCR' => '모듈 %s에 파일 %s에 있는 다른 모듈 %s의 정의가 있습니다.',
    'LBL_SCAN_525_DESCR' => 'Vardef는 HTML 함수의 결과로 enum으로 정의되며, Sugar7에 대해 지원하지 않습니다',
    'LBL_SCAN_423_DESCR' => 'Vardef는 서브 필드를 포함하는 복합 필드로 정의되고, 이러한 서브 필드 중 하나는 실제로 존재하지 않습니다',
    'LBL_SCAN_424_DESCR' => '파일은 인라인 HTML을 포함합니다',
    'LBL_SCAN_425_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_426_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_427_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_428_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다&#39; 허용되는 print_r을 (... true)을 주의하십시오.',
    'LBL_SCAN_429_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_430_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_451_DESCR' => 'AuthN 코드가 삭제되었으므로 대신 \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate를 사용하십시오.',
    'LBL_SCAN_524_DESCR' => '필드는 HTML을 생성하는 함수로 정의되며, 자동 변환할 수 없습니다(이메일 및 통화와 같은 일부 스톡 필드를 변환하는 방법을 알고 있습니다)',
    'LBL_SCAN_432_DESCR' => '필드 &#39;이름 &#39;는 이름, 전체 이름, varchar 또는 id가 아닌 다른 유형의 이름입니다',
    'LBL_SCAN_433_DESCR' => '사용자화 Elastic 검색 파일 %s(을)를 찾았습니다',
    'LBL_SCAN_434_DESCR' => '다음파일에서 $_SESSION 에사용한배열기능: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => '코어 파일 중 하나가 인스턴스에 존재하지 않습니다',
    'LBL_SCAN_502_DESCR' => '코어 파일 중 하나가 이 설치에서 수정되었습니다',
    'LBL_SCAN_503_DESCR' => '사용자 지정 모듈은 새로운 Sugar 모듈과 같은 이름입니다',
    'LBL_SCAN_504_DESCR' => 'Vardef 필드 정의가 입력을 생략합니다',
    'LBL_SCAN_505_DESCR' => 'blob이 아닌 필드 유형은 blob 필드 유형으로 변경됩니다. blob 유형은 인덱싱할 수 없으며 인덱싱되고 있는 필드에 의존하는 필터가 있을 수 있기 때문에 허용되지 않습니다.',
    'LBL_SCAN_506_DESCR' => '$this 것은 메타 데이터 파일에 사용됩니다. 메타 데이터 파일은 Sugar7과 상이한 컨텍스트에서 로드되기 때문에 실패할 수 있습니다.',
    'LBL_SCAN_507_DESCR' => 'Vardef는 서브 필드를 포함하는 복합 필드로 정의되고, 이러한 서브 필드 중 하나는 실제로 존재하지 않습니다',
    'LBL_SCAN_508_DESCR' => '파일은 인라인 HTML을 포함합니다',
    'LBL_SCAN_509_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_510_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_511_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_512_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다&#39; 허용되는 print_r을 (... true)을 주의하십시오.',
    'LBL_SCAN_513_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_514_DESCR' => '코드는 이 출력을 생산하는 함수를 포함합니다',
    'LBL_SCAN_515_DESCR' => '실패한 instaScannerMeta.phpnce을 의미하는 검사 스크립트는 아마도 로드하려고 시도했던 스크립트의 악성 PHP 코드를 포함할 수 있습니다.',
    'LBL_SCAN_517_DESCR' => 'Sugar 7에서 지원되지 않는 블랙리스트로 감지된 패키지입니다',
    'LBL_SCAN_526_DESCR' => "이 목록은 업그레이드를 방지 항목 이름 값을 포함.",
    'LBL_SCAN_528_DESCR' => '날짜 / 날짜 시간 / 시간 필드 와 잘못된 display_default 값 같은 -none-',
    'LBL_SCAN_529_DESCR' => 'PHP 오류는 잘못된 구문 또는 런타임에 코드 문제가 발견되면 인터프리터에 의해 유발 될 수있습니다.',
    'LBL_SCAN_530_DESCR' => '커스텀 파일들 중 하나는 인스턴스에 존재하지 않지만 사용자 지정 코드에 의해 이용됩니다.',
    'LBL_SCAN_531_DESCR' => '%s 데이터베이스 드라이버는 삭제예정입니다. 대신 %s 사용을 고려해주십시오.',
    'LBL_SCAN_532_DESCR' => 'A class declared in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_DESCR' => 'A class declared in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_DESCR' => '%s 데이터베이스 드라이버는 더 이상 지원되지 않습니다. 대신에 %s의 사용을 고려하십시오.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => '대상 슈가 버전에서 지원되지 않도록 블랙 리스트된 패키지를 감지했습니다 이들 패키지를 업그레이드 전에 설치 및 삭제해야 합니다. 이들 패키지를 설치 해제하면 패키지 및 패키지의 모듈 사용에 의해 생성된 테이블 및 데이터가 삭제됨에 유의하십시오.',
    'LBL_SCAN_541_DESCR' => '직렬화 또는 변환할 수 없는 데이터가 프로세스 관리 테이블에서 발견되었습니다',
    'LBL_SCAN_542_DESCR' => '프로세스 관리 비즈니스 규칙 및/또는 작업에서 잘못된 필드가 발견되었습니다. 업그레이드하려면 해당 필드를 비즈니스 규칙 및/또는 작업에서 제거해야 합니다.',
    'LBL_SCAN_545_DESCR' => '프로세스 정의 내 그룹 필드가 일부 잠겨 있습니다. 업그레이드를 계속 진행하려면 프로세스 정의 내 이러한 필드의 잠금을 해제해야 합니다.',
    'LBL_SCAN_546_DESCR' => 'Cannot migrate custom TinyMCE config in Knowledge Base module. '
        . 'The "tinyConfig" parameter in %s file will be emptied. '
        . 'If you have any TinyMCE customizations there you should save them before upgrade '
        . 'and add after upgrade manually.',
    'LBL_SCAN_547_DESCR' => '%s의 삭제된 `resetLoadFlag` 서명 사용',
    'LBL_SCAN_548_DESCR' => '%s의 사용되지 않는 `initButtons` 서명 사용',
    'LBL_SCAN_549_DESCR' => '%s의 삭제된 `getField` 서명 사용',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => '인스턴스는 이미 Suga 7로 업그레이드되었습니다',
    'LBL_SCAN_903_DESCR' => '지원되지 않는 업그레이 더 버전. 해당 SugarUpgradeWizardPrereq 패키지를 설치하십시오',
    'LBL_SCAN_904_DESCR' => '파일: %s, 모듈: %s',
    'LBL_SCAN_999_DESCR' => '알 수 없는 오류이며, 고객지원에 문의하십시오',

    'LBL_SCAN_577_TITLE' => '호환되지 않는 데이터베이스 데이터 정렬',
    'LBL_SCAN_577_LOG' => "데이터 정렬 '%s'은(는) '% s'문자 세트와 호환되지 않습니다",
    'LBL_SCAN_577_DESCR' => "지역 설정에서 다른 데이터 정렬을 선택하거나 'dbconfigoption.collation' 구성을 제거하여 기본 데이터 정렬을 사용하십시오.",

    'LBL_SCAN_578_TITLE' => '임시 데이터베이스 테이블을 제거할 수 없습니다: % s',
    'LBL_SCAN_578_LOG' => '임시 데이터베이스 테이블을 제거할 수 없습니다: % s',
    'LBL_SCAN_578_DESCR' => '문자 집합 변환을 안전하게 확인하기 위해 만든 임시 테이블을 업그레이드 중에 삭제하지 못했고 수동으로 삭제해야 합니다.',

    'LBL_SCAN_579_TITLE' => '테이블 %s의 문자 집합/데이터 정렬(%s) 변환을 수행할 수 없습니다.',
    'LBL_SCAN_579_LOG' => '테이블 %s의 문자 집합/데이터 정렬(%s) 변환을 수행할 수 없습니다.',
);
