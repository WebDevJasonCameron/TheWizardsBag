package com.backend.theWizardsBag.models;

import com.backend.theWizardsBag.utils.Objects.DataTransferObject;

public class SpellTag implements DataTransferObject {

    // ATTs
    private long spellTagId;
    private String tag;

    // CONs


    // GETS & SETs
    public long getSpellTagID() {
        return spellTagId;
    }
    public void setSpellTagID(long spellTagId) {
        this.spellTagId = spellTagId;
    }

    public String getTag() {
        return tag;
    }
    public void setTag(String tag) {
        this.tag = tag;
    }

    // OVRs
    @Override
    public long getId() {
        return 0;
    }

    @Override
    public String toString() {
        return "SpellTag{" +
                "spellTagID=" + spellTagId +
                ", tag='" + tag + '\'' +
                '}';
    }

    // METHs
}
