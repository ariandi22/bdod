    public function writeMd() {
    		$uid = uniqid();
    		$data = $this->input->post('asking');
    		if (isset($data)) {
    			$lokasi = './resources/data-'.$uid.'.md';
    			write_file($lokasi, $data);
    			 echo $lokasi;
    		}
    
    		else {
    		     echo 'Failed to write file!';
    		}
    	}

**This is his location**

> and boy we has patented.