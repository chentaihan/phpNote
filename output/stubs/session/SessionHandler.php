<?php
interface SessionHandlerInterface {
	public function close();
	public function destroy($session_id);
	public function gc($maxlifetime);
	public function open($save_path, $name);
	public function read($session_id);
	public function write($session_id, $session_data);
}
class SessionHandler implements SessionHandlerInterface {
	public function close() { }
	public function create_sid() {}
	public function destroy($session_id) { }
	public function gc($maxlifetime) { }
	public function open($save_path, $session_name) { }
	public function read($session_id) { }
	public function write($session_id, $session_data) { }
}
