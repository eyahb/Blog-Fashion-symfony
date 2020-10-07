<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReporter", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idReporter;

    /**
     * @return int
     */
    public function getIdReporter()
    {
        return $this->idReporter;
    }

    /**
     * @param int $idReporter
     */
    public function setIdReporter($idReporter)
    {
        $this->idReporter = $idReporter;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="reporter", type="string", length=255)
     */
    private $reporter;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Report_issue")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="reporterMail", type="string", length=255)
     */
    private $reporterMail;

    /**
     * @var string
     *
     * @ORM\Column(name="reclamationAbout", type="string", length=255)
     */
    private $reclamationAbout;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=255)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="reporterType", type="string", length=255)
     */
    private $reporterType;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * Set reporter
     *
     * @param string $reporter
     *
     * @return Ticket
     */
    public function setReporter($reporter)
    {
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get reporter
     *
     * @return string
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set reporterMail
     *
     * @param string $reporterMail
     *
     * @return Ticket
     */
    public function setReporterMail($reporterMail)
    {
        $this->reporterMail = $reporterMail;

        return $this;
    }

    /**
     * Get reporterMail
     *
     * @return string
     */
    public function getReporterMail()
    {
        return $this->reporterMail;
    }

    /**
     * Set reclamationAbout
     *
     * @param string $reclamationAbout
     *
     * @return Ticket
     */
    public function setReclamationAbout($reclamationAbout)
    {
        $this->reclamationAbout = $reclamationAbout;

        return $this;
    }

    /**
     * Get reclamationAbout
     *
     * @return string
     */
    public function getReclamationAbout()
    {
        return $this->reclamationAbout;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return Ticket
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set reporterType
     *
     * @param string $reporterType
     *
     * @return Ticket
     */
    public function setReporterType($reporterType)
    {
        $this->reporterType = $reporterType;

        return $this;
    }

    /**
     * Get reporterType
     *
     * @return string
     */
    public function getReporterType()
    {
        return $this->reporterType;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

