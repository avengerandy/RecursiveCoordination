<?php

namespace pattern\recursiveCorrdination;

class BMember extends TeamMember
{
    public static function createFactory($Proposal) {
		$instance = new self($Proposal);
		return $instance->participate();
	}
    public function participate() {
        $this->Proposal->projectData .= '<h1>BMember participate it</h1><br>';
        return $this->send2Next();
    }
}
