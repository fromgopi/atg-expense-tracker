package com.agritekgenics.atgexpensesapi.model;

import java.util.Date;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Entity
@Getter @Setter @NoArgsConstructor
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

    @OneToOne(cascade = CascadeType.ALL)
    private Category category;

    @OneToOne(cascade = CascadeType.ALL)
    private SubCategory subCategory;
}