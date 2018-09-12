<form>
	<div class="row">
		<div class="col s12">
			<select class='select-rounded'>
				<option value="" disabled selected>Passengers</option>
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</select>
			<select class='select-rounded'>
				<option value="" disabled selected>Class</option>
				<option value="1">Economy</option>
				<option value="2">Business</option>
			</select>
			<select class='select-rounded'>
				<option value="" disabled selected>Prefered Airlines</option>
				<option value="1">Air India</option>
				<option value="2">Jet Airways</option>
			</select>
		</div>
	</div>
	<span class="space15"></span>
	<div class="row">
		<div class="col s3 relative">
			<span class="form-icon icon-location"></span>
			<select class='select-inlined select-img-left'>
				<option value="" disabled selected>From Where</option>
				<optgroup label="Mumbai" data-code='BOM'>
					<option value="" data-icon="assets/img/plane-angled.svg" data-distance='1Kns'>Chatrapati Shivaji International Airport</option>
					<option value="" data-icon="assets/img/plane-angled.svg" data-distance='221Kms'>Pune Airport</option>
					<option value="" data-icon="assets/img/plane-angled.svg">example 3</option>
				</optgroup>
				<optgroup label="Chennai">
					<option value="3">Chennai</option>
					<option value="4">Option 4</option>
				</optgroup>
			</select>
			<span class="ys-circleIcon icon-interchange"></span>
		</div>
		<div class="col s3 relative">
			<span class="form-icon icon-location"></span>
			<select class='select-inlined select-img-left'>
				<option value="" disabled selected>From Where</option>
				<optgroup label="Mumbai" data-code='BOM'>
					<option value="" data-icon="assets/img/plane-angled.svg" data-distance='1Kns'>Chatrapati Shivaji International Airport</option>
					<option value="" data-icon="assets/img/plane-angled.svg" data-distance='221Kms'>Pune Airport</option>
					<option value="" data-icon="assets/img/plane-angled.svg">example 3</option>
				</optgroup>
				<optgroup label="Chennai">
					<option value="3">Chennai</option>
					<option value="4">Option 4</option>
				</optgroup>
			</select>
		</div>
		<div class="col s5 relative">
			<span class="form-icon icon-calendar"></span>
			<input type="text" name="daterange" class="ys-daterange" value="" />
		</div>
		<div class="col s1">
			<button type='submit' class="btn btn-large"><span class='icon-search'></span></button>
		</div>
	</div>
</form>


<script>
	$(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'left'
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});
	});
</script>
