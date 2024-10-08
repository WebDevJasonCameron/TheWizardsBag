package com.backend.theWizardsBag.utils.Executors;


import com.backend.theWizardsBag.models.*;
import com.backend.theWizardsBag.utils.Executables.*;

import java.util.ArrayList;
import java.util.List;

public class Executor_test {
    public static void main(String[] args) {

        // -------------------------------------------------------------------------------
        // TEST Condition     <- Completed
        ConditionJDBCExecutor conditionJDBCExecutor = new ConditionJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Damagetype     <- Completed
        DamagetypeJDBCExecutor damagetypeJDBCExecutor = new DamagetypeJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Effect     <- Completed
        EffectJDBCExecutor effectJDBCExecutor = new EffectJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Note     <- Completed
        NoteJDBCExecutor noteJDBCExecutor = new NoteJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST RpgClass     <- Completed
        RpgClassJDBCExecutor classJDBCExecutor = new RpgClassJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Source     <- Completed
        SourceJDBCExecutor sourceJDBCExecutor = new SourceJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Tag     <- Completed
        TagJDBCExecutor tagJDBCExecutor = new TagJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Type     <- Completed
        TypeJDBCExecutor typeJDBCExecutor = new TypeJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Tag     <- Completed
        TagJDBCExecutor tagJDBCExecutor1 = new TagJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST Spell     <- Completed
        SpellJDBCExecutor spellJDBCExecutor = new SpellJDBCExecutor();

        //  List<Spell> spells = spellJDBCExecutor.getAll();
        // for (Spell spell : spells){
        // System.out.println(spell);
        // }

        // Spell spell = spellJDBCExecutor.getBySpellName("Raise Dead");
        // System.out.println(spell);


        // <!>  The word in spell name works bu spell school doesn't... why?
//        List<Spell> spells = spellJDBCExecutor.getAllByWordInSpellName("power");
//        for (Spell spell : spells) {
//            System.out.println(spell.getSpellName());
//        }


        // TEST Spell Search by Spell School
//        List<Spell> spells = spellJDBCExecutor.getAllBySpellSchool("transmutation");
//        for (Spell spell : spells) {
//            System.out.println(spell.getSpellName());
//        }

        // -------------------------------------------------------------------------------
        // TEST SpellClass
        SpellClassJDBCExecutor spellClassJDBCExecutor = new SpellClassJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST SpellCondition
        SpellConditionJDBCExecutor spellConditionJDBCExecutor = new SpellConditionJDBCExecutor();


        // -------------------------------------------------------------------------------
        // TEST SpellDamagetype
        SpellDamagetypeJDBCExecutor spellDamagetypeJDBCExecutor = new SpellDamagetypeJDBCExecutor();



        // -------------------------------------------------------------------------------
        // TEST SpellTag
        SpellTagJDBCExecutor spellTagJDBCExecutor = new SpellTagJDBCExecutor();
//        List<SpellTag> spellTags = spellTagJDBCExecutor.getAllByTagId(15);
//
//        for(SpellTag spellTag : spellTags){
//            System.out.println(spellTag.getSpellsSpellId());
//        }
    }
}
