<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableInEvent
 *
 * @ORM\Table(name="table_in_event", indexes={@ORM\Index(name="er23r2w", columns={"event_id"}), @ORM\Index(name="ref23", columns={"table_id"})})
 * @ORM\Entity
 */
class TableInEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="table_in_event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tableInEventId;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    /**
     * @var VersionStandard
     *
     * @ORM\ManyToOne(targetEntity="VersionStandard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="table_id", referencedColumnName="id_version_standard")
     * })
     */
    private $table;

    public function getTableInEventId(): ?int
    {
        return $this->tableInEventId;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getTable(): ?VersionStandard
    {
        return $this->table;
    }

    public function setTable(?VersionStandard $table): self
    {
        $this->table = $table;

        return $this;
    }
}
