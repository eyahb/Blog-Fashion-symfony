<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report_issue
 *
 * @ORM\Table(name="report_issue")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\Report_issueRepository")
 */
class Report_issue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IssueType", type="string", length=255)
     */
    private $issueType;

    /**
     * @var string
     *
     * @ORM\Column(name="IssueContent", type="string", length=255)
     */
    private $issueContent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set issueType
     *
     * @param string $issueType
     *
     * @return Report_issue
     */
    public function setIssueType($issueType)
    {
        $this->issueType = $issueType;

        return $this;
    }

    /**
     * Get issueType
     *
     * @return string
     */
    public function getIssueType()
    {
        return $this->issueType;
    }

    /**
     * Set issueContent
     *
     * @param string $issueContent
     *
     * @return Report_issue
     */
    public function setIssueContent($issueContent)
    {
        $this->issueContent = $issueContent;

        return $this;
    }

    /**
     * Get issueContent
     *
     * @return string
     */
    public function getIssueContent()
    {
        return $this->issueContent;
    }
}

