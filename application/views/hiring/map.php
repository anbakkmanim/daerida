<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div id="map" style="width: calc(100vw - 140px); height: calc(100vh - 70px); margin-left: 70px; margin-right: 70px; position: fixed;"></div>

<div style="position: fixed; margin-left: 70px;">
  <div class="mt-2 ml-2">
    <div class="card d-inline-block">
      <div class="card-body">
        <div class="form-group label-floating">
          <label class="control-label">검색할 장소</label>
          <input type="text" id="map_query" class="form-control" placeholder type="text" name="map_query" value="<?php echo $value != null ? $value : '' ?>">
          <span class="material-input"></span>
        </div>
        <div class="form-group">
          <div class="btn btn-primary d-block" onclick="search()">검색</div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="http://dapi.kakao.com/v2/maps/sdk.js?appkey=<?= $this->config->item('daum_map_token', 'token'); ?>&libraries=drawing,clusterer,services"></script>
<script>
const map = new daum.maps.Map(document.getElementById('map'), {
	center: new daum.maps.LatLng(35.663185, 128.413770),
	level: 4
});

const place = new daum.maps.services.Places();
place.setMap(map);

const getNewMarker = (map, lat, lng) => new daum.maps.Marker({map: map, position: new daum.maps.LatLng(lat, lng)});

const search = () => {
  const keyword = document.getElementById("map_query").value;
  place.keywordSearch(keyword, (result, status) => {
    if (status === daum.maps.services.Status.OK) {
      console.log(result);
      map.setCenter(new daum.maps.LatLng(result[0].y, result[0].x));
      getNewMarker(map, result[0].y, result[0].x).setMap(map);
    }
  });
};


</script>

<?php $this->load->view('layout/footer'); ?>