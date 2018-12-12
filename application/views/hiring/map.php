<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div id="map" style="width: calc(100vw - 70px); height: calc(100vh - 70px); margin-left: 70px; position: fixed;"></div>

<div style="position: fixed; margin-left: 70px;">
  <div class="mt-2 ml-2">
    <div class="card d-inline-block">
      <div class="card-body">
        <div class="form-group label-floating">
          <label class="control-label">검색할 장소</label>
          <input type="text" class="form-control" placeholder type="text" name="map_query" value="<?php echo $value != null ? $value : '' ?>">
          <span class="material-input"></span>
        </div>
        <div class="form-group">
          <div class="btn btn-primary d-block">검색</div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="http://dapi.kakao.com/v2/maps/sdk.js?appkey=4ba0a2b6bfd38850e8f7647df782a90c&libraries=drawing,clusterer,services"></script>
<script>
const container = document.getElementById('map');
const options = {
	center: new daum.maps.LatLng(35.663185, 128.413770),
	level: 4
};

const map = new daum.maps.Map(container, options);

new daum.maps.Marker({
  map: map,
  position: new daum.maps.LatLng(35.663185, 128.413770)
}).setMap(map);
</script>

<?php $this->load->view('layout/footer'); ?>