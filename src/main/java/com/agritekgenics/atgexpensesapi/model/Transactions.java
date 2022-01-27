package com.agritekgenics.atgexpensesapi.model;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name = "transactions")
public class Transactions {
    // Column Names
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    @Column(name = "id")
    private Long id;

    @Column(nullable = false)
    private String labour_name;

    @Column(nullable = false)
    private String details;

    @Column(nullable = false)
    private Integer amount;

    @Column(nullable = false)
    private Date paid_date;

    @Column(nullable = false)
    private Integer advance_paid = 0;

    @OneToOne(mappedBy = "category")
    private Category category_id;

    @OneToOne(mappedBy = "sub_category")
    private SubCategory subCategoryId;

    // Getters and Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getLabour_name() {
        return labour_name;
    }

    public void setLabour_name(String labour_name) {
        this.labour_name = labour_name;
    }

    public String getDetails() {
        return details;
    }

    public void setDetails(String details) {
        this.details = details;
    }

    public Integer getAmount() {
        return amount;
    }

    public void setAmount(Integer amount) {
        this.amount = amount;
    }

    public Date getPaid_date() {
        return paid_date;
    }

    public void setPaid_date(Date paid_date) {
        this.paid_date = paid_date;
    }

    public Integer getAdvance_paid() {
        return advance_paid;
    }

    public void setAdvance_paid(Integer advance_paid) {
        this.advance_paid = advance_paid;
    }

    public Category getCategory_id() {
        return category_id;
    }

    public void setCategory_id(Category category_id) {
        this.category_id = category_id;
    }

    public SubCategory getSubCategoryId() {
        return subCategoryId;
    }

    public void setSubCategoryId(SubCategory subCategoryId) {
        this.subCategoryId = subCategoryId;
    }

    
}