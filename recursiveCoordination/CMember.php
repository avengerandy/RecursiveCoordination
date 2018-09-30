<?php

namespace pattern\recursiveCorrdination;

class CMember extends TeamMember
{
    public static function createFactory($Proposal) {
		$instance = new self($Proposal);
		return $instance->participate();
	}
    public function participate() {
        $this->Proposal->projectData .= '<h1>CMember participate it</h1><br>';
        return $this->send2Next();
    }
}
