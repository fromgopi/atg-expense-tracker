package com.agritekgenics.atgexpensesapi.model;

import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Entity
@Table(name = "sub_category")
@Getter
@Setter
@NoArgsConstructor
public class SubCategory {
    // Column names
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    @Column(name = "id")
    private Long id;

    @Column(name = "sub_category")
    private String sub_category = "";

    @ManyToOne(targetEntity = Category.class)
    private List<Category> category;
}
