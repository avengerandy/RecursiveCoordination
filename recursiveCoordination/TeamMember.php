<?php

namespace pattern\recursiveCorrdination;

abstract class TeamMember
{

	protected $Proposal;

	protected function __construct($Proposal) {
		$this->Proposal = $Proposal;
	}

	abstract public static function createFactory($Proposal);

	protected function send2Next(){
		if(!$this->Proposal->getTeamMemberCount()){
			return $this->Proposal;
        }
		$nextMember = $this->Proposal->getNextMember();
		$memberClassName = 'pattern\\recursiveCorrdination\\' . $nextMember;
        return $memberClassName::createFactory($this->Proposal);
	}

	abstract protected function participate();

}