<?php
class Structure {
	public function set($json_structure){
				$this->name = $json_structure['name'];
				$this->country_code = $json_structure['country_code'];
				$this->time_zone = $json_structure['time_zone'];
				$this->away = $json_structure['away'];
				$this->structure_id = $json_structure['structure_id'];

	}
}

class Thermostat {
	public function set($json_thermostat){
				$this->device_id = $json_thermostat['device_id'];
				$this->locale = $json_thermostat['locale'];
				$this->software_version = $json_thermostat['software_version'];
				$this->structure_id = $json_thermostat['structure_id'];
				$this->name = $json_thermostat['name'];
				$this->name_long = $json_thermostat['name_long'];
				$this->last_connection = $json_thermostat['last_connection'];
				$this->is_online = $json_thermostat['is_online'];
				$this->can_cool = $json_thermostat['can_cool'];
				$this->can_heat = $json_thermostat['can_heat'];
				$this->is_using_emergency_heat = $json_thermostat['is_using_emergency_heat'];
				$this->has_fan = $json_thermostat['has_fan'];
				$this->fan_timer_active = $json_thermostat['fan_timer_active'];
				$this->fan_timer_timeout = $json_thermostat['fan_timer_timeout'];
				$this->has_leaf = $json_thermostat['has_leaf'];
				$this->temperature_scale = $json_thermostat['temperature_scale'];
				$this->target_temperature_f = $json_thermostat['target_temperature_f'];
				$this->target_temperature_c = $json_thermostat['target_temperature_c'];
				$this->target_temperature_high_f = $json_thermostat['target_temperature_high_f'];
				$this->target_temperature_high_c = $json_thermostat['target_temperature_high_c'];
				$this->target_temperature_low_f = $json_thermostat['target_temperature_low_f'];
				$this->target_temperature_low_c = $json_thermostat['target_temperature_low_c'];
				$this->eco_temperature_high_f = $json_thermostat['eco_temperature_high_f'];
				$this->eco_temperature_high_c = $json_thermostat['eco_temperature_high_c'];
				$this->eco_temperature_low_f = $json_thermostat['eco_temperature_low_f'];
				$this->eco_temperature_low_c = $json_thermostat['eco_temperature_low_c'];
				$this->away_temperature_high_f = $json_thermostat['away_temperature_high_f'];
				$this->away_temperature_high_c = $json_thermostat['away_temperature_high_c'];
				$this->away_temperature_low_f = $json_thermostat['away_temperature_low_f'];
				$this->away_temperature_low_c = $json_thermostat['away_temperature_low_c'];
				$this->hvac_mode = $json_thermostat['hvac_mode'];
				$this->previous_hvac_mode = $json_thermostat['previous_hvac_mode'];
				$this->ambient_temperature_f = $json_thermostat['ambient_temperature_f'];
				$this->ambient_temperature_c = $json_thermostat['ambient_temperature_c'];
				$this->humidity = $json_thermostat['humidity'];
				$this->hvac_state = $json_thermostat['hvac_state'];
				$this->where_id = $json_thermostat['where_id'];
				$this->is_locked = $json_thermostat['is_locked'];
				$this->locked_temp_min_f = $json_thermostat['locked_temp_min_f'];
				$this->locked_temp_max_f = $json_thermostat['locked_temp_max_f'];
				$this->locked_temp_min_c = $json_thermostat['locked_temp_min_c'];
				$this->locked_temp_max_c = $json_thermostat['locked_temp_max_c'];
				$this->label = $json_thermostat['label'];
				$this->where_name = $json_thermostat['where_name'];
				$this->sunlight_correction_enabled = $json_thermostat['sunlight_correction_enabled'];
				$this->sunlight_correction_active = $json_thermostat['sunlight_correction_active'];
				$this->fan_timer_duration = $json_thermostat['fan_timer_duration'];
				$this->time_to_target = $json_thermostat['time_to_target'];
				$this->time_to_target_training = $json_thermostat['time_to_target_training'];
	}
}
?>
