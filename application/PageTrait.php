<?php

/**
 * 페이지 트레이트.
 * header와 footer을 자동으로 불러와 줌
 */
trait PageTrait {
  /**
   * 페이지를 뷰에서 불러옵니다.
   * @param $name 불러올 페이지 명
   */
  public function LoadView($name) {
    $this->load->view('layout/header');
    $this->load->view($name);
    $this->load->view('layout/footer');
  }
}
