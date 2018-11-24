# 데리다 코딩 규칙

## 기본

- (ALL) 모든 파일은 UTF-8 without BOM 인코딩을 사용합니다.

- (ALL) 모든 파일은 Indent로 4칸 띄우기를 사용합니다.

- (ALL) 모든 키워드는 띄어씀을 원칙으로 합니다.

- (PHP) 클래스명은 반드시 `PascalCase`로 명명합니다.

- (PHP) 메서드명은 반드시 `camelCase`로 명명합니다.

- (PHP) 상수는 반드시 `UPPER_CASE`로 명명합니다.

- (PHP) php 코드만 있는 경우 `?>` 태그로 닫지 않습니다.

- (HTML) id는 재사용하지 않는 곳에서만 사용합니다.

- (HTML) class는 반드시 `kebab-case`로 명명합니다.

- (HTML) 재사용 컴포넌트는 그 상단과 하단에 반드시 주석을 달아놓습니다.

## 예시

### PHP

```php
<?php if (!defined('BASEPATH')) exit('No direct script access allowed!');

class TestModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Test 하나를 추가합니다.
     * @param $name 이름
     * @param $date 생성일
     * @return mixed SQL Value
     */
    public function insertTest($name, $date)
    {
        $sql = "INSERT INTO TEST(name, date) VALUES (?, ?)";
        $bind = [
            $name,
            $date
        ];

        return $this->db->query($sql, $bind);
    }
}
```
