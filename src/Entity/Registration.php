<?php

namespace App\Entity;

use App\Repository\RegistrationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegistrationRepository::class)
 */
class Registration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100)
     */
    private $status;

    /**
     * @ORM\Column(type="boolean")
     */
    private $policyAgreed;

    /**
     * @ORM\Column(type="boolean")
     */
    private $imageRightAgreed;

    /**
     * @ORM\Column(type="boolean")
     */
    private $emergencyAgreed;

    /**
     * @ORM\Column(type="boolean")
     */
    private $insuranceInfoAgreed;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPaid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isValidated;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class, inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $memberId;

    /**
     * @ORM\ManyToOne(targetEntity=Activity::class, inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activityId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class)
     */
    private $createdBy;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class)
     */
    private $updatedBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    public function setMemberId(int $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    public function setActivityId(int $activityId): self
    {
        $this->activityId = $activityId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPolicyAgreed(): ?bool
    {
        return $this->policyAgreed;
    }

    public function setPolicyAgreed(bool $policyAgreed): self
    {
        $this->policyAgreed = $policyAgreed;

        return $this;
    }

    public function getImageRightAgreed(): ?bool
    {
        return $this->imageRightAgreed;
    }

    public function setImageRightAgreed(bool $imageRightAgreed): self
    {
        $this->imageRightAgreed = $imageRightAgreed;

        return $this;
    }

    public function getEmergencyAgreed(): ?bool
    {
        return $this->emergencyAgreed;
    }

    public function setEmergencyAgreed(bool $emergencyAgreed): self
    {
        $this->emergencyAgreed = $emergencyAgreed;

        return $this;
    }

    public function getInsuranceInfoAgreed(): ?bool
    {
        return $this->insuranceInfoAgreed;
    }

    public function setInsuranceInfoAgreed(bool $insuranceInfoAgreed): self
    {
        $this->insuranceInfoAgreed = $insuranceInfoAgreed;

        return $this;
    }

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(bool $isPaid): self
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getIsValidated(): ?bool
    {
        return $this->isValidated;
    }

    public function setIsValidated(bool $isValidated): self
    {
        $this->isValidated = $isValidated;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedBy(): ?Member
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?Member $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedBy(): ?Member
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?Member $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
}
